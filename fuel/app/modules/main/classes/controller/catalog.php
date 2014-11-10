<?php

namespace Main;

class Controller_Catalog extends Controller_Base
{
    /**
     * Индексная страницы
     * 
     * @param integer $category_id
     * @param integer $page
     */
    public function action_index($category_id = 'all', $page = 1)
    {                
        // Извлекаем категории
        $data['categories'] = \Model_Items_Category::find('all');
        
        // Получаем название активной категории
        if ($category_id != 'all')
        {
            $data['active_category'] = \Model_Items_Category::find($category_id);
            if (!empty($data['active_category']))
            {
                $title = 'title_'.$this->language;
                $data['active_category'] = $data['active_category']->$title;
            }
            else
                return \Response::forge(\ViewModel::forge('welcome/404'), 404);
        }
        else
        {
            $data['active_category'] = \Lang::get('store.categories_all');
        }
        
        $search = \Input::get('search', NULL);
        // Общее количество товаров
        // Если есть поиск
        if (!is_null($search))
        {
            $total_items = \Model_Items_Item::query()
                                    ->related('items_i18n')
                                    ->where('items_i18n.title', 'LIKE', '%'.$search.'%')
                                    ->count();
        }
        else
        {
            if ($category_id != 'all')
            {
                $total_items = \Model_Items_Item::count(array(
                                    'where' => array(array('item_category.'.$title, '=', $data['active_category'])), 
                                    'related' => array('item_category')
                    ));
            }
            else
            {
                $total_items = \Model_Items_Item::count(array('where' => array(array('category_id', '<>', 'null'))));
            }
        }
        
        // Настройки пагинации
        $config = array(
            'pagination_url' => \Uri::create($this->language.'/catalog/index/'.$category_id),
            'total_items' => $total_items,
            'per_page' => 6,
            'uri_segment' => 5,
        );
        $pagination = \Pagination::forge('mypagination', $config);
        
        // Получаем настройки сортировки и
        // извлекаем товары 
        $order_by = \Input::get('order_by', 'items.id');
        $order_method = \Input::get('order_method', 'desc');        
        $data['items'] = \Model_Items_Item::get_items($this->language, 
                                                      $category_id, 
                                                      $pagination->per_page, 
                                                      $pagination->offset,
                                                      $order_by,
                                                      $order_method,
                                                      $search);
        
        // Ключевые слова и описание страницы
        $meta = array(
            array('name' => 'description', 'content' => \Config::get('catalog_keywords_'.$this->language, '')),
            array('name' => 'keywords', 'content' => \Config::get('catalog_description_'.$this->language, '')),
        );
        $this->template->set_global('meta', $meta);
                        
        // Передаём данные в вид
        $data['pagination'] = $pagination->render();
        $data['order_by'] = $order_by;
        $data['order_method'] = $order_method;
        $this->template->title = \Lang::get('top-menu.catalog') . ' :: '. $data['active_category'];
        $data['subnav'] = array($category_id => 'active');
        $data['category_id'] = $category_id;
        $this->template->content = \View::forge('catalog/index', $data, FALSE);
    }
    
    /**
     * Действие для отображения одного товара
     * 
     * @param int $id id товара
     */
    public function action_show($id = null)
    {        
        is_null($id) and \Response::redirect($this->language.'/catalog');
         
        // Извлекаем из БД товар
        $item = \Model_Items_Item::get_item($id, $this->language);
         
        ($item->count() == 0) and \Response::redirect($this->language.'/catalog');
        $data['item'] = $item[0];
        
        // Ключевые слова и описание страницы
        $meta = array(
            array('name' => 'description', 'content' => $data['item']->search_description),
            array('name' => 'keywords', 'content' => $data['item']->keywords),
        );
        $this->template->set_global('meta', $meta);
        
        // Передача переменных и отображение
        $this->template->title = \Lang::get('top-menu.catalog') . ' :: '. $data['item']->title;
        $this->template->content = \View::forge('catalog/show', $data, FALSE);
    }
    
    /**
     * Обрабатывает POST-запрос на добавление товара в корзину 
     * и возвращает HTML-код с подтвреждением добавления товара
     */
    public function action_add_to_cart()
    {
        $data['id'] = (int)\Input::post('id');
        if ($data['id'] != 0)
        {
            // Получаем данные товара
            $data['item'] = \Model_Items_Item::get_item($data['id'], $this->language);
            $data['item'] = $data['item'][0];
            
            // Добавляем в корзину
            \Cart::add(array(
                'name' => $data['item']->title,
                'id' => $data['item']->id,
                'qty' => 1,
                'price' => $data['item']->price,
            ));
            
            return new \Response(\View::forge('catalog/add_to_cart', $data, FALSE));
        }
    }
}
