<?php

namespace Admin;

/**
 * Контроллер для управления мультиязычными данными товаров
 */
class Controller_Items_I18n extends Controller_Base{

    public function before() 
    {
        parent::before();
        
        \View::set_global('subnav', array('items'=> 'active' ));
    }
    
	public function action_index()
	{
		$data['items_i18ns'] = \Model_Items_I18n::find('all');
		$this->template->title = "Items_i18ns";
		$this->template->content = View::forge('items/i18n/index', $data);

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
		$this->template->content = View::forge('items/i18n/view', $data);

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
					'keywords' => Input::post('keywords'),
					'seacrh_description' => Input::post('seacrh_description'),
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
		$this->template->content = View::forge('items/i18n/create');

	}

    /**
     * Действие для редактирования данных
     * 
     * @param string $lang идентификатор языка
     * @param int $id id товара
     */
	public function action_edit($lang = 'ru', $id = null)
	{
        is_null($id) and \Response::redirect('items/i18n');

        if ( ! $item_i18n = 
                \Model_Items_I18n::find('all', array(
                    'related' => array('item_language'),
                     'where' => array('item_language.value' => $lang, 'item_id' => $id))))
        {
            \Session::set_flash('error', 'Товар отсутствует'); die();
            \Response::redirect('admin/items/i18n');
        }
        $item_i18n = current($item_i18n);
        
        // Основноые данные товара
        $item = \Model_Items_Item::find($id, array('related' => array('items_i18n')));
        
        $val = \Model_Items_I18n::validate('edit');

        if ($val->run())
        {
            $item_i18n->item_id = $id;
            $item_i18n->title = \Input::post('title');
            $item_i18n->description = \Input::post('description');
            $item_i18n->keywords = \Input::post('keywords');
            $item_i18n->search_description = \Input::post('search_description');

            if ($item_i18n->save())
            {
                \Session::set_flash('success', 'Товар отредактировано');

                \Response::redirect('admin/items/i18n/edit/'.$lang.'/'.$id);
            }

            else
            {
                \Session::set_flash('error', 'Невозможно отредактировать товар #' . $id);
            }
        }

        else
        {
            if (\Input::method() == 'POST')
            {
                $item_i18n->item_id = $id;
                $item_i18n->title = $val->validated('title');
                $item_i18n->description = $val->validated('description');
                $item_i18n->keywords = \Input::post('keywords');
                $item_i18n->search_description = \Input::post('search_description');

                \Session::set_flash('error', $val->error());
            }
            
            $this->template->set_global('item_i18n', $item_i18n, false);
        }
        
        $data['item'] = $item;
        $data['subnav'] = array($lang . '_info' => 'active');
        $this->template->title = "Товары";
        $this->template->content = \View::forge('items/i18n/edit', $data, FALSE);

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
