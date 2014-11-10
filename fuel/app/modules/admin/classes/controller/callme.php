<?php

namespace Admin;

class Controller_Callme extends Controller_Base{

    public function before() 
    {
        parent::before();
        
        \View::set_global('subnav', array('callme'=> 'active' ));
    }
    
    public function action_index($page = 1)
    {
        $page = (int)$page;
        if ($page == 0)
            \Response::redirect ('admin/callme');
        
        // Настройки пагинации
        $config = array(
            'pagination_url' => \Uri::create('admin/callme/index'),
            'total_items' => \Model_Callme::count(),
            'per_page' => 15,
            'uri_segment' => 4,
            'name' => 'bootstrap',
        );        
        $pagination = \Pagination::forge('mypagination', $config);
        
        $data['callmes'] = \Model_Callme::query()
                ->rows_limit($pagination->per_page)
                ->rows_offset($pagination->offset)
                ->order_by('status', 'asc')
                ->order_by('id', 'desc')
                ->get();
        
        $data['pagination'] = $pagination->render();
        $data['page'] = $page;
        $data['items_count'] = $pagination->total_items;
        $this->template->title = 'Перезвонить';
        $this->template->content = \View::forge('callme/index', $data, FALSE);

    }

    public function action_view($id = null)
    {
            is_null($id) and \Response::redirect('admin/callme');

            if ( ! $data['callme'] = \Model_Callme::find($id))
            {
                    \Session::set_flash('error', 'Невозможно найти запись #'.$id);
                    \Response::redirect('admin/callme');
            }

            $this->template->title = 'Перезвонить';
            $this->template->content = \View::forge('callme/view', $data);

    }

    public function action_delete($id = null)
    {
            is_null($id) and \Response::redirect('admin/callme');

            if ($callme = \Model_Callme::find($id))
            {
                    $callme->delete();

                    \Session::set_flash('success', 'Удалена запись #'.$id);
            }

            else
            {
                    \Session::set_flash('error', 'Невозможно удалить запись #'.$id);
            }

            \Response::redirect('admin/callme');

    }
    
    public function action_set_processed($id = null)
    {
        is_null($id) and \Response::redirect('admin/callme');
        
        if ($callme = \Model_Callme::find($id))
		 {
            $callme->status = 1;
            $callme->save();

            \Session::set_flash('success', 'Удалена запись #'.$id);
        }

        else
        {
            \Session::set_flash('error', 'Невозможно удалить запись #'.$id);
        }

        \Response::redirect('admin/callme');
    }


}
