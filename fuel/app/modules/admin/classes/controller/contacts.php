<?php

namespace Admin;

/**
 * Контроллер для управления данными на странице сайта "Контакты"
 */
class Controller_Contacts extends Controller_Base{

    public function before() 
    {
        parent::before();
        
        \View::set_global('subnav', array('pages'=> 'active' ));
    }

    /**
     * Действие для отображения страницы
     */
    public function action_index($lang = 'ru')
    {
        is_null($lang) and Response::redirect('admin/contacts/index');
        if (!in_array($lang, array('ru', 'en', 'os')))
            Response::redirect('admin/contacts/index');
        
        // Получаем статью из БД
        $article = \Model_Articles_I18n::query()
                ->related('article_parent')
                ->related('article_parent.article_type')
                ->related('article_language')
                ->where('article_parent.article_type.value', 'Обратная связь')
                ->where('article_language.value', $lang)
                ->get();
        $article = current($article);
        
        $val = \Model_Articles_I18n::validate('edit');

        if ($val->run())
        {
            $article->title = \Input::post('title');
            $article->description = \Input::post('description');
            $article->keywords = \Input::post('keywords');
            $article->full_text = \Input::post('full_text');
            if ($article->save(FALSE))
            {
                \Session::set_flash('success', 'Данные обновлены.');

                \Response::redirect('admin/contacts/index/' . $lang);
            }

            else
            {
                \Session::set_flash('error', 'Невозможно обновить новость.');
            }
        }
        else
        {
            if (\Input::method() == 'POST')
            {
                $article->title = \Input::post('title');
                $article->description = \Input::post('description');
                $article->keywords = \Input::post('keywords');
                $article->full_text = \Input::post('full_text');

                \Session::set_flash('error', $val->error());
            }

            $this->template->set_global('article', $article, false);
        }
        
        // Передача переменных в вид и отображаение
        $data['subnav'] = array($lang => 'active');
        $this->template->title = 'Страницы :: Обратная связь';
        $this->template->content = \View::forge('about/index', $data, FALSE);
    }
}