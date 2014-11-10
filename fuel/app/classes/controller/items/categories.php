<?php
class Controller_Items_Categories extends Controller_Template{

	public function action_index()
	{
		$data['items_categories'] = Model_Items_Category::find('all');
		$this->template->title = "Items_categories";
		$this->template->content = View::forge('items\categories/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('items/categories');

		if ( ! $data['items_category'] = Model_Items_Category::find($id))
		{
			Session::set_flash('error', 'Could not find items_category #'.$id);
			Response::redirect('items/categories');
		}

		$this->template->title = "Items_category";
		$this->template->content = View::forge('items\categories/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Items_Category::validate('create');
			
			if ($val->run())
			{
				$items_category = Model_Items_Category::forge(array(
					'title' => Input::post('title'),
				));

				if ($items_category and $items_category->save())
				{
					Session::set_flash('success', 'Added items_category #'.$items_category->id.'.');

					Response::redirect('items/categories');
				}

				else
				{
					Session::set_flash('error', 'Could not save items_category.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Items_Categories";
		$this->template->content = View::forge('items\categories/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('items/categories');

		if ( ! $items_category = Model_Items_Category::find($id))
		{
			Session::set_flash('error', 'Could not find items_category #'.$id);
			Response::redirect('items/categories');
		}

		$val = Model_Items_Category::validate('edit');

		if ($val->run())
		{
			$items_category->title = Input::post('title');

			if ($items_category->save())
			{
				Session::set_flash('success', 'Updated items_category #' . $id);

				Response::redirect('items/categories');
			}

			else
			{
				Session::set_flash('error', 'Could not update items_category #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$items_category->title = $val->validated('title');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('items_category', $items_category, false);
		}

		$this->template->title = "Items_categories";
		$this->template->content = View::forge('items\categories/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('items/categories');

		if ($items_category = Model_Items_Category::find($id))
		{
			$items_category->delete();

			Session::set_flash('success', 'Deleted items_category #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete items_category #'.$id);
		}

		Response::redirect('items/categories');

	}


}
