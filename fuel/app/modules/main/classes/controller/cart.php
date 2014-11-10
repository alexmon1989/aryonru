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
