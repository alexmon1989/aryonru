<?php

class Controller_Api extends Controller_Rest{
    
    /**
     * Получение количества и цены товаров
     */
    public function get_price_count_cart()
    {
        $lang = Input::get('lang');
        
        $exchage_rate = Model_Setting::find('first', array(
            'where' => array('name' => 'exchange_rate')
        ));
        
        if ($lang == 'en')
        {
            $price = sprintf('%01.2f', (Cart::total_price()/$exchage_rate->value));
        }
        else
            $price = sprintf('%d', Cart::total_price());
        
        return $this->response(array(
            'price' => $price,
            'count' => Cart::total_qty(),
        ));
    }
}