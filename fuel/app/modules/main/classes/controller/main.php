<?php

namespace Main;

class Controller_Main extends Controller_Base
{
    public function action_index()
    {                
        // Получение статьи для главной страницы
        $data['article'] = \Model_Articles_Article::query()
                ->related('article_type')
                ->related('articles_i18n')
                ->related('articles_i18n.article_language')
                ->where('article_type.value', 'Главная страница')
                ->where('articles_i18n.article_language.value', $this->language)
                ->get();     
                
        // Получение списка акционных товаров и передача его глобально в вид
        $promotions = \Model_Items_Item::query()
                ->related('items_i18n')
                ->related('items_i18n.item_language')
                ->where('is_promotion', 1)
                ->get();
        $this->template->set_global('promotions', $promotions, FALSE);
        
        // Ключевые слова и описание страницы
        $meta = array(
            array('name' => 'description', 'content' => current(current($data['article'])->articles_i18n)->description),
            array('name' => 'keywords', 'content' => current(current($data['article'])->articles_i18n)->keywords),
        );
        $this->template->set_global('meta', $meta);

        $this->template->title = \Lang::get('top-menu.main');

        // Передаём данные в вид
        $this->template->content = \View::forge('main/index', $data, FALSE);
    }
    
    /**
     * Обработчик запроса на добавления заявки на звонок
     */
    public function action_show_callme()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Callme::validate_create('create');

            if ($val->run())
            {
                $item = \Model_Callme::forge(array(
                                'username' => \Input::post('username'),
                                'telephone' => \Input::post('telephone'),
                                'message' => \Input::post('message'),
                                'status' => 0,
                            )
                        );                
                if ($item->save())
                {
                    $data['message'] = 'success';
                }
            }
            else
            {
                $data['message'] = 'error';
            }
            return new \Response(\View::forge('main/add_callme', $data));
        }
        
        return new \Response(\View::forge('main/show_callme'));
    }

    /**
     * 404 страница.
     *
     * @return \Response
     */
    public function action_404()
    {
        return new \Response(\View::forge('template/404'));
    }
}
