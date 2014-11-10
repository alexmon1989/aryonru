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
    
    public function action_enter_details()
    {
        if (\Input::method() == 'POST')
        {
            
        }
        
        $this->template->title = \Lang::get('store.enter_details');
        $this->template->content = \View::forge('cart/enter_details');
    }


    public function action_pay()
    {
        $mrh_login = "AryonOnline";
        $mrh_pass1 = "123OLOLO123";
        $inv_id = 0;
        $inv_desc = "Техническая документация по ROBOKASSA";
        $out_summ = "8.96";
        $crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1");
        
        $this->template->title = \Lang::get('store.cart');
        $this->template->content = \View::forge('cart/pay', array(
                'mrh_login' => $mrh_login,
                'mrh_pass1' => $mrh_pass1,
                'inv_id' => $inv_id,
                'inv_desc' => $inv_desc,
                'out_summ' => $out_summ,
                'crc' => $crc,
            )
        );
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
}
