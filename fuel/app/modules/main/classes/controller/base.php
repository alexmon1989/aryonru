<?php

namespace Main;

abstract class Controller_Base extends \Controller_Template {
    
    public $template = 'template/template';
    public $language = 'ru';

    public function before()
    {
        parent::before();
        
        // Узнаем нужный язык
        $this->language = \Uri::segment(1);
        if (is_null($this->language))
            $this->language = 'ru';
        if (!in_array($this->language, array('ru', 'en', 'os')))
        {
            throw new \HttpNotFoundException;
        }
        else
        {
            \Config::set('language', $this->language);
            \Lang::load('lang.yml');
            \View::set_global('language', $this->language);
        }
        
        // Проверяем какую страницу грузим, 
        // чтобы знать грузить ли акции
        $page = \Uri::segment(2);
        if (is_null($page))
            $page = 'main';
        \View::set_global('page', $page);
        
        // Слайдер
        $slider = \Model_Slider::find('all', array('order_by' => 'position'));
        \View::set_global('slider', $slider); 
        
        // Выгружаем настройки из БД
        foreach (\Model_Setting::find('all') as $setting)
        {
            \Config::set($setting->name, $setting->value);
        }
    }
}