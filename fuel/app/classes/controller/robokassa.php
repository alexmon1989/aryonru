<?php

/**
 * Контроллер для управления ответами сервера Robokassa
 */
class Controller_Robokassa extends Controller_Rest
{    
    /**
     * ResultURL
     * меняет статус заказа на "оплачено"
     */
    public function action_result()
    {
       // Проверяем контрольную сумму
        $out_summ = Input::get('OutSum');
        $inv_id = Input::get('InvId');
        $mrh_pass2 = Config::get('password_2');
        $shp_backlanguage = Input::get('Shp_backlanguage');
        $crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2:Shp_backlanguage=$shp_backlanguage"));
        
        // проверка контрольной суммы
        if ($crc === Input::get('SignatureValue'))
        {
            // Меняем статус заказа на "оплачено"
            $order = \Model_Order::find(Input::get('InvId'));
            if ($order)
            {
                $order->payed = 1;
                $order->pay_date = time();
                $order->save();
                
                // Посылаем письмо клиенту
                Config::set('language', $shp_backlanguage);
                Lang::load('lang.yml');
                $email = Email::forge();
                $email->from('info@aryon.ru', 'Aryon.ru');
				$email->subject(Lang::get('store.subject_email'));
                $email->to($order->email, $order->username);
                $email->html_body(\View::forge('email/template_'.$shp_backlanguage, array('order' => $order)));
                $email->send();
            }        

            \Session::delete('order_id');
            
            return $this->response(array(
                'result' => 1
            ));
        }
        
        return $this->response(array(
            'result' => 0,
            'error' => 'Неверная контрольная сумма'
        ));        
    }

    /**
     * Переадресация на страницу успеха с нужным языком
     */
    public function action_success()
    {
        if (Input::get('Shp_backlanguage'))
        {
            // Очищаем корзину 
            $items = Cart::items();
            foreach($items as $item)
            {
                $item->delete();
            }
            
            // Показатель того, что оплата совершена (для того чтоб страница об успехе не раблотала просто так)
            Session::set('success_pay', TRUE);
            
            // Переадресовываем на страницу успеха контроллера Cart
            Response::redirect(Input::get('Shp_backlanguage').'/cart/success');
        }
        else
        {
            Response::redirect('');            
        }
    }
    
    /**
     * Переадресация на страницу неудачи с нужным языком
     */
    public function action_fail()
    {
        if (Input::get('Shp_backlanguage') and Input::get('InvId'))
        {
            // Удаляем заказ из БД
            $order = Model_Order::find(Input::get('InvId'), 
                        array('related' => 'orders_items'));
            if ($order)
            {
                $order->delete();
            }
            
            // Показатель того, что оплата совершена с ошибкой (для того чтоб страница об ошибке не раблотала просто так)
            Session::set('fail_pay', TRUE);
            
            // Переадресовываем на страницу ошибки контроллера Cart
            Response::redirect(Input::get('Shp_backlanguage').'/cart/fail');
        }
        else
        {
            Response::redirect('');            
        }        
    }
}
