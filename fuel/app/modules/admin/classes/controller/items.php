<?php

namespace Admin;

/**
 * Контроллер для управления товарами
 */
class Controller_Items extends Controller_Base{

    public function before() 
    {
        parent::before();
        
        \View::set_global('subnav', array('items'=> 'active' ));
    }
    
    /**
     * Действие для отображения списка товаров
     */
    public function action_index($page = 1)
    {
        $page = (int)$page;
        if ($page == 0)
            \Response::redirect ('admin/items/index/');
        
        // Настройки и инициализация пагинации
        if (\Input::post('submit'))
        {
            \Session::set('admin_items_search', \Input::post('search', ''));
        }
        $config = array(
            'pagination_url' => \Uri::create('admin/items/index'),
            'total_items' => \Model_Items_Item::count(array('where' => array(array('items_i18n.title', 'LIKE', '%'.\Session::get('admin_items_search', '').'%')), 'related' => array('items_i18n'))),
            'per_page' => 15,
            'uri_segment' => 4,
            'name' => 'bootstrap',
        );
        
        $pagination = \Pagination::forge('mypagination', $config);
        
        // Получение товаров
        
        $order = array(\Input::get('order_by', \Session::get('admin_items_order_by', 'id')) => \Input::get('order_method', \Session::get('admin_items_order_method', 'DESC')));
        
        foreach ($order as $key => $value)
        {
            if (!in_array($key, array(
                'id', 'items_i18n.title', 'item_category.title_ru', 'price', 'is_promotion', 'visible'
                ))
               or
                (!in_array(strtoupper($value), array('ASC', 'DESC')))    
               )
            {
                $order = array('id' => 'DESC');
                \Session::set('admin_items_order_by', 'id');
                \Session::set('admin_items_order_method', 'DESC');
            }
            else
            {
                \Session::set('admin_items_order_by', $key);
                \Session::set('admin_items_order_method', $value);
            }
        }
        
        $data['items'] = \Model_Items_Item::find('all', 
                                    array('order_by' => $order,
                                         'where' => array('items_i18n.language_id' => 1, array('items_i18n.title', 'LIKE', '%'.\Session::get('admin_items_search', '').'%')),
                                         'rows_limit' => $pagination->per_page,   
                                         'rows_offset' => $pagination->offset,   
                                         'related' => array('item_category', 'items_i18n'),  
                                    )
                );
        
        $data['pagination'] = $pagination->render();
        $data['page'] = $page;
        $data['items_count'] = $pagination->total_items;
        $data['subnav'] = array('list' => 'active');
        $this->template->title = "Товары :: Страница " . $page;
        $this->template->content = \View::forge('items/index', $data, FALSE);
    }
	
    /**
     * Действие для добавления товара
     */
    public function action_create()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Items_I18n::validate('create');

            if ($val->run())
            {
                // Создаём родительский товар
                $item = \Model_Items_Item::forge(array('is_promotion' => 0, 'visible' => 0));

                if ($item and $item->save())
                {
                    // Создаём товары в таблице items_i18n
                    $item_ru = \Model_Items_I18n::forge(array(
                        'item_id' => $item->id,
                        'title' => \Input::post('title'),
                        'description' => \Input::post('description'),
                        'keywords' => \Input::post('keywords'),
                        'search_description' => \Input::post('search_description'),
                        'language_id' => 1,
                    ));
                    $item_ru->save();
                    
                    $item_en = \Model_Items_I18n::forge(array(
                        'item_id' => $item->id,
                        'language_id' => 2,
                    ));                    
                    $item_en->save();
                    
                    $item_os = \Model_Items_I18n::forge(array(
                        'item_id' => $item->id,
                        'language_id' => 3,
                    ));
                    $item_os->save();
                    
                    \Session::set_flash('success', 'Товар добавлено.');

                    \Response::redirect('admin/items/edit/'.$item->id);
                }

                else
                {
                    \Session::set_flash('error', 'Невозможно сохранить товар.');
                }
            }
            else
            {
                \Session::set_flash('error', $val->error());
            }
        }

        $this->template->title = "Товары";
        $this->template->content = \View::forge('items/i18n/create');

    }

    /**
     * Действие для редактирования товара (основная информация)
     * 
     * @param int $id
     */
    public function action_edit($id = null)
    {
        is_null($id) and Response::redirect('items');

        if ( ! $item = \Model_Items_Item::find($id, array('related' => 'items_i18n')))
        {
            \Session::set_flash('error', 'Невозможно найти товар #'.$id);
            \Response::redirect('admin/items');
        }

        $val = \Model_Items_Item::validate('edit');

        if ($val->run())
        {
            // Загружаем файл
            $config = array(
                'path' => DOCROOT.'assets/img/items',
                'randomize' => true,
                'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
            );
            \Upload::process($config);
            if (\Upload::is_valid())
            {
                // Сохраняем файл на диск
                \Upload::save();
                
                // Ресайзим изображение до 1024*768
                $files = \Upload::get_files();
                $path = $files[0]['saved_to'] . $files[0]['saved_as'];
                $img = \Image::load($path);
                $sizes = $img->sizes();
                if ($sizes->width >= $sizes->height)
                    $img->resize(1024, 768, true)->save($path);
                else
                    $img->resize(768, 1024, true)->save($path);    
                
                // Удаляем старый файл
                $old_file_path = DOCROOT . 'assets/img/items/' . $item->photo_name;
                if (is_file($old_file_path) and file_exists($old_file_path))
                    unlink($old_file_path);
                
                // Пишем инфу в БД
                $item->photo_name = $files[0]['saved_as'];
                $item->category_id = \Input::post('category_id');
                $item->price = \Input::post('price');
                $item->is_promotion = (int) \Input::post('is_promotion');
                $item->visible = (int) \Input::post('visible');
                $item->discount = (int) \Input::post('discount');   

                if ($item->save())
                {
                    \Session::set_flash('success', 'Товар отредактировано.');

                    \Response::redirect('admin/items/edit/'.$id);
                }
                else
                {
                    \Session::set_flash('error', 'Ошибка при редактировании товара.');
                }
            }
            else
            {
                // Если есть ошибки при сохранении файла
                foreach (\Upload::get_errors() as $file)
                {
                    // Если не грузился файл, то просто сохраняем информацию
                    if ($file['errors'][0]['error'] == 4)
                    {
                        // Пишем инфу в БД
                        $item->category_id = \Input::post('category_id');
                        $item->price = \Input::post('price');
                        $item->is_promotion = (int) \Input::post('is_promotion');
                        $item->visible = (int) \Input::post('visible');
                        $item->discount = (int) \Input::post('discount');  
                        
                        if ($item->save())
                        {
                            \Session::set_flash('success', 'Товар отредактировано.');

                            \Response::redirect('admin/items/edit/'.$id);
                        }
                        else
                        {
                            \Session::set_flash('error', 'Ошибка при редактировании товара.');
                        }
                    }
                    
                    if (isset($file['errors'][0]) and $file['errors'][0]['error'] != 4)
                        \Session::set_flash('error', $file['errors'][0]['message']);
                }
            }      
        }

        else
        {
            if (\Input::method() == 'POST')
            {
                $item->category_id = $val->validated('category_id');
                $item->price = $val->validated('price');
                $item->photo_name = $val->validated('photo_name');
                $item->is_promotion = $val->validated('is_promotion');
                $item->discount = $val->validated('discount');

                \Session::set_flash('error', $val->error());
            }

            $this->template->set_global('item', $item, false);
        }

        $categories = array('' => '');
        foreach (\Model_Items_Category::find('all') as $category) 
        {
            $categories[$category->id] = $category->title_ru; 
        }        
        $this->template->set_global('categories', $categories);
        
        $data['item'] = $item;
        $data['subnav'] = array('main_info' => 'active');
        $this->template->title = "Товары";
        $this->template->content = \View::forge('items/edit', $data);
    }

    /**
     * Действие для удаления товара
     * 
     * @param int $id id товара
     */
    public function action_delete($id = null)
    {
        is_null($id) and \Response::redirect('admin/items');

        if ($item = \Model_Items_Item::find($id))
        {
            $item->delete();

            \Session::set_flash('success', 'Товар успешно удалён');
        }

        else
        {
            \Session::set_flash('error', 'Невозможно удалить товар #'.$id);
        }

        \Response::redirect('admin/items/index');
    }
    
    /**
     * Действие для изменения видимости товара
     * 
     * @param int $id
     * @param int $visible
     */
    public function action_change_visible($id = null, $visible = 1)
    {
        is_null($id) and \Response::redirect('admin/items');
        !in_array((int) $visible, array(0,1)) and \Response::redirect('admin/items');
        
        // Ищем товар
        if ( ! $item = \Model_Items_Item::find($id))
        {
            \Session::set_flash('error', 'Невозможно найти товар #'.$id);
            \Response::redirect('admin/items');
        }
        
        // Меняем его видимость и сохраняем
        $item->visible = $visible;
        if ($item->save())
        {
            \Session::set_flash('success', 'Видимость товара изменена.');

            \Response::redirect_back();
        }
        else
        {
            \Session::set_flash('error', 'Ошибка при редактировании товара.');
        }
    }
}
