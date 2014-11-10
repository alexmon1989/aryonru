<?php
class Controller_Items extends Controller_Template{

	public function action_index()
	{
		$data['items'] = Model_Item::find('all');
		$this->template->title = "Items";
		$this->template->content = View::forge('items/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('items');

		if ( ! $data['item'] = Model_Item::find($id))
		{
			Session::set_flash('error', 'Could not find item #'.$id);
			Response::redirect('items');
		}

		$this->template->title = "Item";
		$this->template->content = View::forge('items/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Item::validate('create');
			
			if ($val->run())
			{
				$item = Model_Item::forge(array(
					'category_id' => Input::post('category_id'),
					'price' => Input::post('price'),
					'photo_name' => Input::post('photo_name'),
					'is_promotion' => Input::post('is_promotion'),
					'discount' => Input::post('discount'),
				));

				if ($item and $item->save())
				{
					Session::set_flash('success', 'Added item #'.$item->id.'.');

					Response::redirect('items');
				}

				else
				{
					Session::set_flash('error', 'Could not save item.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Items";
		$this->template->content = View::forge('items/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('items');

		if ( ! $item = Model_Item::find($id))
		{
			Session::set_flash('error', 'Could not find item #'.$id);
			Response::redirect('items');
		}

		$val = Model_Item::validate('edit');

		if ($val->run())
		{
			$item->category_id = Input::post('category_id');
			$item->price = Input::post('price');
			$item->photo_name = Input::post('photo_name');
			$item->is_promotion = Input::post('is_promotion');
			$item->discount = Input::post('discount');

			if ($item->save())
			{
				Session::set_flash('success', 'Updated item #' . $id);

				Response::redirect('items');
			}

			else
			{
				Session::set_flash('error', 'Could not update item #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$item->category_id = $val->validated('category_id');
				$item->price = $val->validated('price');
				$item->photo_name = $val->validated('photo_name');
				$item->is_promotion = $val->validated('is_promotion');
				$item->discount = $val->validated('discount');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('item', $item, false);
		}

		$this->template->title = "Items";
		$this->template->content = View::forge('items/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('items');

		if ($item = Model_Item::find($id))
		{
			$item->delete();

			Session::set_flash('success', 'Deleted item #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete item #'.$id);
		}

		Response::redirect('items');

	}


}
