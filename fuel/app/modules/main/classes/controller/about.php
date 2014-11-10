<?php

namespace Main;

class Controller_About extends Controller_Base
{
    public function action_index()
    {
        // Получение статьи для страницы
        $data['article'] = \Model_Articles_Article::query()
                ->related('article_type')
                ->related('articles_i18n')
                ->related('articles_i18n.article_language')
                ->where('article_type.value', 'О компании')
                ->where('articles_i18n.article_language.value', $this->language)
                ->get();
        
        $this->template->title = \Lang::get('top-menu.about');

        // Передаём данные в вид
        $this->template->content = \View::forge('about/index', $data, FALSE);
    }
}
