<?php

namespace Admin;

abstract class Controller_Base extends \Controller_Template {
    
    public $template = 'template/template';

    public function before()
    {
        parent::before();
        
        // Проверяем, авторизирован ли пользователь
        if (\Uri::segment(3) != 'login')
        {
            if (!\Auth::check())
            {
                \Response::redirect('admin/users/login');
            }
        }
    }
}