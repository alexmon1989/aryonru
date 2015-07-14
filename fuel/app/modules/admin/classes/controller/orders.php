<?php

namespace Admin;

/**
 * Контроллер для управления новостями
 */
class Controller_Orders extends Controller_Base{

    public function before() 
    {
        parent::before();
        
        $this->template->title = 'Заказы';
        
        \View::set_global('subnav', array('orders'=> 'active'));
    }

    /**
     * Действие для отображения оплаченных заказов
     */
    public function action_index($page = 1)
    {
        $page = (int)$page;
        if ($page == 0)
            \Response::redirect ('admin/orders/index/');
        
        // Пагинация
        $config = array(
            'pagination_url' => \Uri::create('admin/orders/index'),
            'total_items' => \Model_Order::count(),
            'per_page' => 15,
            'uri_segment' => 4,
            'name' => 'bootstrap',
        );
        $pagination = \Pagination::forge('mypagination', $config);
        
        // Сортировка
        $order = array(\Input::get('order_by', \Session::get('admin_orders_order_by', 'pay_date')) => \Input::get('order_method', \Session::get('admin_orders_order_method', 'DESC')));
        // Записываем в сессию сортровку, чтоб она работала при смене страниц, т.к. get-параметров в строке не будет
        foreach ($order as $key => $value)
        {
            if (!in_array($key, array(
                'id', 'username', 'telephone', 'email', 'email', 'price', 'issued', 'pay_date'
                ))
               or
                (!in_array(strtoupper($value), array('ASC', 'DESC')))    
               )
            {
                $order = array('pay_date' => 'DESC');
                \Session::set('admin_orders_order_by', 'id');
                \Session::set('admin_orders_order_method', 'DESC');
            }
            else
            {
                \Session::set('admin_orders_order_by', $key);
                \Session::set('admin_orders_order_method', $value);
            }
        }
        
        // Извлечение заказов
        $data['orders'] = \Model_Order::find('all', array(
                'where' => array(array('payed', 1)),
                'rows_limit' => $pagination->per_page,   
                'rows_offset' => $pagination->offset,   
                'order_by' => $order,
            )
        );
        
        $data['pagination'] = $pagination->render();
        $data['page'] = $page;
        $this->template->content = \View::forge('orders/index', $data, FALSE);
    }

    /**
     * Действие для редактирования заказа
     * 
     * @param id $id id заказа в БД
     */
    public function action_edit($id = null)
    {
        is_null($id) and Response::redirect('admin/orders/index');
        
        // Получение заказа из БД
        $order = \Model_Order::find($id, array(
                'related' => array(
                    'orders_items',
                    'orders_items.item_parent',
                    'orders_items.item_parent.items_i18n',
                    'orders_items.item_parent.items_i18n.item_language'
                ),
                'where' => array(array('orders_items.item_parent.items_i18n.item_language.value', 'ru'))
            )
        );

        if (empty($order))
        {
            \Session::set_flash('error', 'Заказ не найден или товары из него уже были удалены.');
            \Response::redirect('admin/orders/index');
        }      
        
        $val = \Model_Order::validate('edit');

        if ($val->run())
        {
            $order->username = \Input::post('username');
            $order->telephone = \Input::post('telephone');
            $order->email = \Input::post('email');
            $order->address = \Input::post('address');
            $order->user_comments = \Input::post('user_comments');
            $order->operator_comments = \Input::post('operator_comments');
            $order->issued = \Input::post('issued');

            if ($order->save())
            {
                \Session::set_flash('success', 'Заказ обновлён.');

                \Response::redirect_back('admin/orders/index');
            }

            else
            {
                \Session::set_flash('error', 'Невозможно обновить заказ.');
            }
        }

        else
        {
            if (\Input::method() == 'POST')
            {
                $order->username = \Input::post('username');
                $order->telephone = \Input::post('telephone');
                $order->email = \Input::post('email');
                $order->address = \Input::post('address');
                $order->user_comments = \Input::post('user_comments');
                $order->operator_comments = \Input::post('operator_comments');
                $order->issued = \Input::post('issued');

                \Session::set_flash('error', $val->error());
            }

            $this->template->set_global('order', $order, false);
        }
        
        // Передача переменных в вид и отображение страницы   
        $this->template->title = 'Заказы &raquo; Редактирование';
        $this->template->content = \View::forge('orders/edit');
    }
    
    /**
     * Действие для удаления заказа
     * 
     * @param int $id
     */
    public function action_delete($id = null)
    {
        is_null($id) and Response::redirect('admin/orders/index');
        
        $order = \Model_Order::find($id, array('related' => 'orders_items'));
        $order->delete();
        
        \Session::set_flash('success', 'Заказ удалён.');
        \Response::redirect('admin/orders/index');
    }
}