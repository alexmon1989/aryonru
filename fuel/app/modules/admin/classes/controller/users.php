<?php

namespace Admin;

/**
 * Контроллер для управления слайдерами
 */
class Controller_Users extends Controller_Base
{
    public function before() 
    {
        parent::before();
        \View::set_global('subnav', array('users'=> 'active'));
    }

    public function action_login()
    {
        // Проверяем была ли уже совершена авторизация
        if (\Auth::check())
        {
            \Response::redirect('admin');
        }

        // Если поступили данные
        if (\Input::method() == 'POST')
        {
            // Пробуем авторизировать
            if (\Auth::instance()->login(\Input::post('username'), \Input::post('password')))
            {
                // Не запоминаем
                \Auth::dont_remember_me();
                
                // Переадресовіваем на результаты
                \Response::redirect_back('admin');
            }
            else
            {
                \Session::set_flash('error', 'Данная комбинация логина и пароля не является верной.');
            }
        }
        
        return new \Response(\View::forge('users/login'));
    }

    /**
     * Выход
     */
    public function action_logout()
    {
        $auth = \Auth::instance();
        $auth->logout();
        \Session::set_flash('success', 'Вы вышли из системы.');
        \Response::redirect('admin');
    }

    /**
     * Действие для регистрации нового администратора
     */
    public function action_register()
	{    
        $auth = \Auth::instance();
        $view = \View::forge('users/register');
        $form = \Fieldset::forge('register');
        \Model_User::register($form);
        
        if (\Input::post())
        {
            $form->repopulate();
            $result = \Model_User::validate_registration($form, $auth);
            if ($result['e_found'])
            {
                \Session::set_flash('error', $result['errors']);
            }
            else
            {
                \Session::set_flash('success', 'Новый администратор добавлен.');
                \Response::redirect('admin/users');
            }
        }
        
        $view->set('reg', $form->build(), false);
        $this->template->title = 'Пользователи';
        $this->template->content = $view;
    }

    /**
     * Действие для редактирования данных админа
     */
    public function action_edit($id = NULL)
    {
        is_null($id) and \Response::redirect('admin/users');        
        
        $auth = \Auth::instance();
        $view = \View::forge('users/edit');
        $form = \Fieldset::forge('register');
        \Model_User::update_user($form);
        
        // Получение данных админа
        $admin = \Model_User::find($id);
        if (!$admin)
        {
            \Session::set_flash('error', 'Такого пользователя нет в БД');
            \Response::redirect('admin/users');        
        }
        unset($admin->password);
        $form->populate($admin);
        
        if (\Input::post())
        {
            $form->repopulate();
            $result = \Model_User::validate_update($form, $auth, $admin->username);
            if ($result['e_found'])
            {
                \Session::set_flash('error', $result['errors']);
            }
            else
            {
                \Session::set_flash('success', 'Данные обновлены.');
                \Response::redirect('admin/users');
            }
        }
        
        $view->set('edit', $form->build(), false);
        $view->set('admin', $admin);
        $this->template->title = 'Пользователи';
        $this->template->content = $view;
    }

    /**
     * Действие для отображения списка админов
     */
    public function action_index()
    {        
        $data['total_items'] = \Model_User::count();
        $data['results'] = \Model_User::find('all');
        $this->template->title = 'Пользователи';
        $this->template->content = \View::forge('users/index', $data);
    }
    
    /**
     * Действие для удаления админа из БД
     * 
     * @param int $id id записи в БД
     */
    public function action_delete($id = null)
    {            
        is_null($id) and \Response::redirect('admin/users');

        if ($result = \Model_User::find($id))
        {
            \Auth::delete_user($result->username);

            \Session::set_flash('success', 'Администратор был удалён');
        }

        else
        {
            \Session::set_flash('error', 'Невозможно удалить администратора, т.к. его не существует');
        }

        \Response::redirect('admin/users');
    }
}
