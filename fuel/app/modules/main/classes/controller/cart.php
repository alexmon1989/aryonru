<?php

namespace Main;

/**
 * Контроллер для отображения корзины
 */
class Controller_Cart extends Controller_Base
{
    /**
     * Индексная старница
     */
    public function action_index()
    {
        // Товары в корзине
        $cart_items = \Cart::items();         

        $data['items'] = array();
        foreach($cart_items as $cart_item)
        {   
            // Получаем информацию о товарах в корзине из БД
            $item = \Model_Items_Item::query()
                ->related('items_i18n')
                ->related('items_i18n.item_language')
                ->where('id', '=', $cart_item->get_id())
                ->where('items_i18n.item_language.value', '=', $this->language)
                ->get_one();
            // Передаём в вид столько товаров, сколько их в корзине
            for ($i=0; $i < $cart_item->get_qty(); $i++)
            {
                $data['items'][] = $item;
            }
        }
        $this->template->title = \Lang::get('store.cart');
        $this->template->content = \View::forge('cart/index', $data);
    }
    
    /**
     * Заполнение деталей покупателя
     */
    public function action_enter_details()
    {
        // Товары в корзине
        $cart_items = \Cart::items();  
        
        // Если есть товары в корзине
        if (!empty($cart_items))
        {        
            if (\Input::method() == 'POST')
            {
                // Проводим валидацию
                $val = \Model_Order::validate('create');
                if ($val->run())
                {       
                    // Если есть прошлый заказ в сессии, то удаляем его
                    if (\Session::get('order_id'))
                    {
                        $order = \Model_Order::find(\Session::get('order_id'), 
                                            array('related' => 'orders_items'));
                        if ($order)
                        {
                            $order->delete();
                            \Session::delete('order_id');
                        }
                    }
                    
                    // Создаём заказ в БД
                    $order = \Model_Order::forge(array(
                        'username' => \Input::post('username'),
                        'telephone' => \Input::post('telephone'),
                        'email' => \Input::post('email'),
                        'address' => \Input::post('address'),
                        'user_comments' => \Input::post('user_comments'),
                        'payed' => 0,
                        'price' => \Cart::total_price()
                    ));
                    foreach($cart_items as $cart_item)
                    {                           
                        $order->orders_items[] = \Model_Orders_Item::forge(array(
                                'item_id' => $cart_item->get_id(),
                                'count' => $cart_item->get_qty(),
                            )
                        );
                    }
                    $order->save();
                    
                    // Записываем в сессию номер заказа
                    \Session::set('order_id', $order->id);
                    
                    // Переадресовываем на следующий шаг
                    \Response::redirect($this->language.'/cart/pay');
                }
                else
                {
                    \Session::set_flash('error', $val->error());
                }
            }

            $this->template->title = \Lang::get('store.cart');
            $this->template->content = \View::forge('cart/enter_details');
        }
        else
        {
            \Response::redirect('');
        }
    }


    /**
     * Действие, отображающее страницу с полными данными заказа и кнопкой "Оплатить"
     */
    public function action_pay()
    {
        // Товары в корзине
        $cart_items = \Cart::items();  
        
        // Если есть товары в корзине
        if (!empty($cart_items) and \Session::get('order_id'))
        {        
            // Данные заказа
            $order = \Model_Order::find(\Session::get('order_id'), array(
                    'related' => array(
                        'orders_items', 
                        'orders_items.item_parent', 
                        'orders_items.item_parent.items_i18n', 
                        'orders_items.item_parent.items_i18n.item_language'
                    ),
                    'where' => array(array('orders_items.item_parent.items_i18n.item_language.value', $this->language))
                )
            );           
            //$data['items'] = array();
        /*foreach($cart_items as $cart_item)
        {   
            // Получаем информацию о товарах в корзине из БД
            $item = \Model_Items_Item::query()
                ->related('items_i18n')
                ->related('items_i18n.item_language')
                ->where('id', '=', $cart_item->get_id())
                ->where('items_i18n.item_language.value', '=', $this->language)
                ->get_one();
            // Передаём в вид столько товаров, сколько их в корзине
            for ($i=0; $i < $cart_item->get_qty(); $i++)
            {
                $data['items'][] = $item;
            }
        }*/
                        
            $mrh_login = "AryonOnline";
            $mrh_pass1 = "123OLOLO123";
            $inv_id = $order->id;
            $inv_desc = "Оплата товаров с сайта Aryon.ru";
            $out_summ = $order->price;
            $shp_backlanguage = $this->language; // Текущий язык страницы (для дальнейшей работы после оплаты)
            $crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_backlanguage=$shp_backlanguage");
            $this->language == 'en' ? $culture = 'en' : $culture = 'ru';
            
            $this->template->title = \Lang::get('store.cart');
            $this->template->content = \View::forge('cart/pay', array(
                    'mrh_login' => $mrh_login,
                    'mrh_pass1' => $mrh_pass1,
                    'inv_id' => $inv_id,
                    'inv_desc' => $inv_desc,
                    'out_summ' => $out_summ,
                    'out_summ' => $out_summ,
                    'culture' => $culture,
                    'shp_backlanguage' => $shp_backlanguage,
                    'crc' => $crc,
                    'order' => $order,
                )
            );
        }
        else
        {
            \Response::redirect('');
        }
    }

    // Убирает товар из корзины
    public function action_remove($id = null)
    {
        is_null($id) and \Response::redirect($this->language.'/cart');
        // Товары в корзине
        $cart_items = \Cart::items();
        
        foreach($cart_items as $cart_item)
        {   
            if ($id == $cart_item->get_id())
            {
                $qty = $cart_item->get_qty();
                if ($qty == 1)
                {
                    $cart_item->delete();
                }
                else
                {
                    $cart_item->update('qty', $qty-1);
                }
            }
        }
        
        \Response::redirect($this->language.'/cart');
    }
    
    /**
     * Страница с сообщением об успехе оплаты
     */
    public function action_success()
    {
        if (\Session::get('success_pay'))
        { 
            \Session::delete('success_pay');
            $this->template->title = \Lang::get('store.cart');
            $this->template->content = \View::forge('cart/success', array(
                    'message' => \Lang::get('store.success_pay')
                )
            );
        }
        else
        {
            \Response::redirect('');
        }
    }
    
    /**
     * Страница с сообщением о неудаче оплаты
     */
    public function action_fail()
    {
        if (\Session::get('fail_pay'))
        {        
            \Session::delete('fail_pay');
            $this->template->title = \Lang::get('store.cart');
            $this->template->content = \View::forge('cart/fail', array(
                    'message' => \Lang::get('store.fail_pay')
                )
            );
        }
        else
        {
            \Response::redirect('');
        }
    }

}
