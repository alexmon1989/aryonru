<?php

namespace Admin;

class Controller_Items_Categories extends Controller_Base{

    public function before() 
    {
        parent::before();
        
        \View::set_global('subnav', array('items'=> 'active' ));
    }
    
    /**
     * Действие для отображения списка категорий
     */
    public function action_index()
    {
        $data['items_categories'] = \Model_Items_Category::find('all');
        $data['subnav'] = array('categories' => 'active');
        $this->template->title = "Товары :: Категории";
        $this->template->content = \View::forge('items/categories/index', $data);
    }

    /**
     * Действие для создания категории
     */
    public function action_create()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Items_Category::validate('create');

            if ($val->run())
            {
                $items_category = \Model_Items_Category::forge(array(
                        'title_ru' => \Input::post('title_ru'),
                        'title_en' => \Input::post('title_en'),
                        'title_os' => \Input::post('title_os'),
                ));

                if ($items_category and $items_category->save())
                {
                    \Session::set_flash('success', 'Была создана новая категория.');

                    \Response::redirect('admin/items/categories');
                }

                else
                {
                    \Session::set_flash('error', 'Невозможно создать категорию.');
                }
            }
            else
            {
                \Session::set_flash('error', $val->error());
            }
        }

        $this->template->title = "Товары :: Категории";
        $this->template->content = \View::forge('items/categories/create');
    }

    /**
     * Редактирование данных категории
     * 
     * @param int $id id категории в БД
     */
    public function action_edit($id = null)
    {
        is_null($id) and \Response::redirect('items/categories');

        if ( ! $items_category = \Model_Items_Category::find($id))
        {
            \Session::set_flash('error', 'Невозможно найти категорию'.$id);
            \Response::redirect('items/categories');
        }

        $val = \Model_Items_Category::validate('edit');

        if ($val->run())
        {
            $items_category->title_ru = \Input::post('title_ru');
            $items_category->title_en = \Input::post('title_en');
            $items_category->title_os = \Input::post('title_os');

            if ($items_category->save())
            {
                \Session::set_flash('success', 'Категория обновлена');

                \Response::redirect('admin/items/categories');
            }

            else
            {
                \Session::set_flash('error', 'Невозможно обновить категорию #' . $id);
            }
        }

        else
        {
            if (\Input::method() == 'POST')
            {
                $items_category->title_ru = \Input::post('title_ru');
                $items_category->title_en = \Input::post('title_en');
                $items_category->title_os = \Input::post('title_os');

                \Session::set_flash('error', $val->error());
            }

            $this->template->set_global('items_category', $items_category, false);
        }

        $this->template->title = "Товары :: Категории";
        $this->template->content = \View::forge('items/categories/edit');
    }

    /**
     * Действие для удаления категории
     * 
     * @param int $id
     */
    public function action_delete($id = null)
    {
        is_null($id) and \Response::redirect('admin/items/categories');

        if ($items_category = \Model_Items_Category::find($id, array('related' => 'items')))
        {
            if (empty($items_category->items))
            {
                $items_category->delete();
                \Session::set_flash('success', 'Категория была удалена');
            }
            else
            {
                \Session::set_flash('error', 'Невозможно удалить категорию, к которой относятся товары.');                              
            }			
        }
        else
        {
            \Session::set_flash('error', 'невозможно удалить категорию #'.$id);
        }

        \Response::redirect('admin/items/categories');
    }
}
