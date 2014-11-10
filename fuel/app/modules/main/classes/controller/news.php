<?php

namespace Main;

class Controller_News extends Controller_Base
{
    /**
     * Действие для отображения списка новостей
     */
    public function action_index()
    {
        // Запрос на извлечение статей
        $count = \Model_Articles_I18n::get_articles_count('Новости', $this->language);

        // Пагинация
        $config = array(
            'pagination_url' => \URI::create($this->language . '/news/page'),
            'total_items'    => $count,
            'per_page'       => 3,
            'uri_segment'    => 4,
        );
        switch ($this->language) {
            case 'ru':
                $config['previous-marker'] = '← Назад';
                $config['next-marker'] = 'Вперёд →';
                break;
            case 'en':
                $config['previous-marker'] = '← Back';     
                $config['next-marker'] = 'Forward →';           
                break;
            case 'os':
                $config['previous-marker'] = '← фæстæмæ';  
                $config['next-marker'] = 'размæ →';              
                break;
            default:
                break;
        }
        $pagination = \Pagination::forge('news_pagination', $config);
        $data['pagination'] = $pagination->render();

        // Получение статей
        $data['articles'] = \Model_Articles_I18n::get_articles('Новости', 
                                                              $this->language, 
                                                              $pagination->per_page, 
                                                              $pagination->offset);
        
        // Ключевые слова и описание страницы
        $meta = array(
            array('name' => 'description', 'content' => \Config::get('news_keywords_'.$this->language, '')),
            array('name' => 'keywords', 'content' => \Config::get('news_description_'.$this->language, '')),
        );
        $this->template->set_global('meta', $meta);
        
        // Передаём данные в вид
        $this->template->title = \Lang::get('top-menu.news');;
        $this->template->content = \View::forge('news/index', $data, FALSE);
    }

    /**
     * Действие для отображения конкретной новости
     */
    public function action_show($news_id = null)
    {   
        is_null($news_id) and Response::redirect('news/index');
        
        // Получаем новость
        $data['article'] = \Model_Articles_Article::query()
                                ->related('article_type')
                                ->related('articles_i18n')
                                ->related('articles_i18n.article_language')
                                ->where('articles_i18n.article_language.value', $this->language)
                                ->where('article_type.value', 'Новости')
                                ->where('id', $news_id)
                                ->get_one();
        // Если такой статьи нет, то отображаем страницу 404
        if (is_null($data['article']))
            throw new \HttpNotFoundException;
        
        // Ключевые слова и описание страницы
        $meta = array(
            array('name' => 'description', 'content' => current($data['article']->articles_i18n)->description),
            array('name' => 'keywords', 'content' => current($data['article']->articles_i18n)->keywords),
        );
        $this->template->set_global('meta', $meta);
        
        // Передаем данные в вид
        $this->template->title = current($data['article']->articles_i18n)->title;    
        $this->template->content = \View::forge('news/show', $data, FALSE);
    }
}
