<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'users';

    public static function register(Fieldset $form)
    {
        $form->form()->set_attribute('class', 'form-horizontal');
        $form->form()->set_attribute('autocomplete', 'off');        
        $form->add('username', 'Логин:')->add_rule('required');
        $form->add('password', 'Пароль:', array('type'=>'password'))->add_rule('required');
        $form->add('password2', 'Еще раз пароль:', array('type' => 'password'))->add_rule('required');
        $form->add('email', 'E-mail:')->add_rule('required')->add_rule('valid_email');
        $form->add('submit', ' ', array('type'=>'submit', 'value' => 'Сохранить', 'class' => 'btn btn-primary'));
        return $form;
    }
    
    public static function update_user(Fieldset $form)
    {
        $form->form()->set_attribute('class', 'form-horizontal');
        $form->form()->set_attribute('autocomplete', 'off');        
        $form->add('password', 'Пароль:', array('type'=>'password'));
        $form->add('password2', 'Еще раз пароль:', array('type' => 'password'));
        $form->add('email', 'E-mail:')->add_rule('required')->add_rule('valid_email');
        $form->add('submit', ' ', array('type'=>'submit', 'value' => 'Сохранить', 'class' => 'btn btn-primary'));
        return $form;
    }
    
    public static function validate_registration(Fieldset $form, $auth)
    {
        $form->field('password')->add_rule('match_value', $form->field('password2')->get_attribute('value'));
        $val = $form->validation();
        $val->set_message('required', 'Поле :field обязательно к заполнению');
        $val->set_message('match_value', 'Пароли должны совпадать');
        $val->set_message('valid_email', 'Поле :field должно содержать правильный E-Mail.');
        
        if ($val->run())
        {
            $username = $form->field('username')->get_attribute('value');
            $password = $form->field('password')->get_attribute('value');
            $email = $form->field('email')->get_attribute('value');
            try
            {
                try
                {
                    $user = $auth->create_user($username, $password, $email);
                }
                catch (Exception $e)
                {
                    $error = $e->getMessage();
                }
                if (!isset($user))
                {
                    if (isset($error))
                    {
                        $li = $error;
                    }
                    else
                    {
                        $li = 'Ошибка при создании администратора!';
                    }
                    $errors = Html::ul(array($li));
                    return array('e_found' => true, 'errors' => $errors);
                }
            }
            catch (Exception $e)
            {
                $error = $e->getMessage();
            }
        }
        else
        {
            $errors = $val->show_errors();
            return array('e_found' => true, 'errors' => $errors);
        }
    }
    
    public static function validate_update(Fieldset $form, $auth, $old_username)
    {
        $form->field('password')->add_rule('match_value', $form->field('password2')->get_attribute('value'));
        $val = $form->validation();
        $val->set_message('required', 'Поле :field обязательно к заполнению');
        $val->set_message('match_value', 'Пароли должны совпадать');
        $val->set_message('valid_email', 'Поле :field должно содержать правильный E-Mail.');
        
        if ($val->run())
        {
            $password = $form->field('password')->get_attribute('value');
            $email = $form->field('email')->get_attribute('value');
            try
            {
                try
                {
                    $arr['email'] = $email;
                    if ($password != '')
                        $arr['password'] = $password;
                    
                    $res = $auth->update_user($arr, $old_username);                            
                }
                catch (Exception $e)
                {
                    $error = $e->getMessage();
                }
                if (!isset($res))
                {
                    if (isset($error))
                    {
                        $li = $error;
                    }
                    else
                    {
                        $li = 'Ошибка при редактровании данных администратора!';
                    }
                    $errors = Html::ul(array($li));
                    return array('e_found' => true, 'errors' => $errors);
                }
            }
            catch (Exception $e)
            {
                $error = $e->getMessage();
            }
        }
        else
        {
            $errors = $val->show_errors();
            return array('e_found' => true, 'errors' => $errors);
        }
    }
}
