<?php

namespace Main;

class Controller_Contacts extends Controller_Base
{

    public function action_index()
    {
        // Получение статьи для страницы
        $data['article'] = \Model_Articles_Article::query()
                ->related('article_type')
                ->related('articles_i18n')
                ->related('articles_i18n.article_language')
                ->where('article_type.value', 'Обратная связь')
                ->where('articles_i18n.article_language.value', $this->language)
                ->get();

        $this->template->title = \Lang::get('top-menu.contacts');

        // Передаём данные в вид
        $this->template->content = \View::forge('about/index', $data, FALSE);
    }
}
