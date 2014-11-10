<?php

namespace Admin;

/**
 * Контроллер для управления настройками
 */
class Controller_Settings extends Controller_Base{

    public function before() 
    {
        parent::before();
        \View::set_global('subnav', array('settings'=> 'active'));
    }
    
	public function action_index()
	{
		$data['settings'] = \Model_Setting::find('all');
		$this->template->title = "Настройки";
		$this->template->content = \View::forge('settings/index', $data);

	}
	
    /**
     * Редактирование
     */
	public function action_edit($id = null)
	{
		is_null($id) and \Response::redirect('settings');

		if ( ! $setting = \Model_Setting::find($id))
		{
			\Session::set_flash('error', 'Невозможно найти запись #'.$id);
			\Response::redirect('settings');
		}

		$val = \Model_Setting::validate('edit');

		if ($val->run())
		{
			$setting->name = \Input::post('name');
			$setting->value = \Input::post('value');

			if ($setting->save())
			{
				\Session::set_flash('success', 'Обновлено запись #' . $id);

				\Response::redirect('admin/settings');
			}

			else
			{
				\Session::set_flash('error', 'Невозможно обновить запись #' . $id);
			}
		}

		else
		{
			if (\Input::method() == 'POST')
			{
				$setting->name = $val->validated('name');
				$setting->value = $val->validated('value');

				\Session::set_flash('error', $val->error());
			}

			$this->template->set_global('setting', $setting, false);
		}

		$this->template->title = "Настройки";
		$this->template->content = \View::forge('settings/edit');

	}
}
