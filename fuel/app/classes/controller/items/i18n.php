<?php
class Controller_Items_I18n extends Controller_Template{

	public function action_index()
	{
		$data['items_i18ns'] = Model_Items_I18n::find('all');
		$this->template->title = "Items_i18ns";
		$this->template->content = View::forge('items\i18n/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('items/i18n');

		if ( ! $data['items_i18n'] = Model_Items_I18n::find($id))
		{
			Session::set_flash('error', 'Could not find items_i18n #'.$id);
			Response::redirect('items/i18n');
		}

		$this->template->title = "Items_i18n";
		$this->template->content = View::forge('items\i18n/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Items_I18n::validate('create');
			
			if ($val->run())
			{
				$items_i18n = Model_Items_I18n::forge(array(
					'item_id' => Input::post('item_id'),
					'title' => Input::post('title'),
					'description' => Input::post('description'),
				));

				if ($items_i18n and $items_i18n->save())
				{
					Session::set_flash('success', 'Added items_i18n #'.$items_i18n->id.'.');

					Response::redirect('items/i18n');
				}

				else
				{
					Session::set_flash('error', 'Could not save items_i18n.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Items_I18Ns";
		$this->template->content = View::forge('items\i18n/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('items/i18n');

		if ( ! $items_i18n = Model_Items_I18n::find($id))
		{
			Session::set_flash('error', 'Could not find items_i18n #'.$id);
			Response::redirect('items/i18n');
		}

		$val = Model_Items_I18n::validate('edit');

		if ($val->run())
		{
			$items_i18n->item_id = Input::post('item_id');
			$items_i18n->title = Input::post('title');
			$items_i18n->description = Input::post('description');

			if ($items_i18n->save())
			{
				Session::set_flash('success', 'Updated items_i18n #' . $id);

				Response::redirect('items/i18n');
			}

			else
			{
				Session::set_flash('error', 'Could not update items_i18n #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$items_i18n->item_id = $val->validated('item_id');
				$items_i18n->title = $val->validated('title');
				$items_i18n->description = $val->validated('description');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('items_i18n', $items_i18n, false);
		}

		$this->template->title = "Items_i18ns";
		$this->template->content = View::forge('items\i18n/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('items/i18n');

		if ($items_i18n = Model_Items_I18n::find($id))
		{
			$items_i18n->delete();

			Session::set_flash('success', 'Deleted items_i18n #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete items_i18n #'.$id);
		}

		Response::redirect('items/i18n');

	}


}
