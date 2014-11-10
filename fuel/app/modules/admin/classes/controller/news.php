<?php

namespace Admin;

/**
 * Контроллер для управления новостями
 */
class Controller_News extends Controller_Base{

    public function before() 
    {
        parent::before();
        
        \View::set_global('subnav', array('news'=> 'active' ));
    }

    /**
     * Действие для отображения новостей
     */
    public function action_index()
    {
        $data['news'] = \Model_Articles_I18n::get_articles('Новости', 'ru');
        $this->template->title = 'Новости :: Список';
        $this->template->content = \View::forge('news/index', $data, FALSE);
    }

    /**
     * Действие для создания новости
     */
    public function action_create()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Articles_I18n::validate('create');
            if ($val->run())
            {
                // Создаём родительскую статью
                $article = \Model_Articles_Article::forge(array(
                    'article_type_id' => 2,
                ));
                $article->save();
                
                // Модель для русской статьи
                $article_i18n_ru = \Model_Articles_I18n::forge(array(
                    'article_id' => $article->id,
                    'title' => \Input::post('title'),
                    'description' => \Input::post('description'),
                    'keywords' => \Input::post('keywords'),
                    'full_text' => \Input::post('full_text'),
                    'language_id' => 1,
                ));
                
                // Модель для англ. статьи
                $article_i18n_en = \Model_Articles_I18n::forge(array(
                    'article_id' => $article->id,
                    'title' => '',
                    'description' => '',
                    'keywords' => '',
                    'full_text' => '',
                    'language_id' => 2,
                ));
                
                // Модель для осетинской статьи
                $article_i18n_os = \Model_Articles_I18n::forge(array(
                    'article_id' => $article->id,
                    'title' => '',
                    'description' => '',
                    'keywords' => '',
                    'full_text' => '',
                    'language_id' => 3,
                ));
                
                // Сохраняем в БД
                if ($article_i18n_ru and $article_i18n_ru->save() and
                    $article_i18n_en and $article_i18n_en->save() and
                    $article_i18n_os and $article_i18n_os->save())
                {
                    \Session::set_flash('success', 'Новость добавлена.');

                    \Response::redirect('admin/news/index');
                }
                
                else
                {
                    \Session::set_flash('error', 'Не удалось сохранить новость.');
                }
            }
            else
            {
                \Session::set_flash('error', $val->error());
            }
        }
        
        $this->template->title = 'Новости &raquo; Создание';
        $this->template->content = \View::forge('news/create');
    }

    /**
     * Действие для редактирования новости
     * 
     * @param id $id id новости в БД
     * @param string $lang язык новости
     */
    public function action_edit($id = null, $lang = 'ru')
    {
        is_null($id) and Response::redirect('admin/news/index');
        if (!in_array($lang, array('ru', 'en', 'os')))
            Response::redirect('admin/about/index');
        
        // Получение новости        
        $article = \Model_Articles_I18n::get_article($id, $lang);
        if (empty($article))
        {
            \Session::set_flash('error', 'Новость с id = '. $id . ' не найдена.');
            \Response::redirect('admin/news/index');
        }        
        $article = current($article);
        
        $val = \Model_Articles_I18n::validate('edit');

        if ($val->run())
        {
            $article->title = \Input::post('title');
            $article->description = \Input::post('description');
            $article->keywords = \Input::post('keywords');
            $article->full_text = \Input::post('full_text');

            if ($article->save())
            {
                \Session::set_flash('success', 'Новость обновлено.');

                \Response::redirect('admin/news/index');
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
        
        // Передача переменных в вид и отображение страницы                
        $data['id'] = $id;
        $data['subnav'] = array($lang => 'active');
        $this->template->title = 'Новости &raquo; Редактирование';
        $this->template->content = \View::forge('news/edit', $data);
    }
    
    /**
     * Действие для удаления новости
     * 
     * @param int $id
     */
    public function action_delete($id = null)
    {
        is_null($id) and Response::redirect('admin/news/index');
        
        $article = \Model_Articles_Article::find($id, array('related' => 'articles_i18n'));
        $article->delete();
        
        \Session::set_flash('success', 'Новость удалена.');
        \Response::redirect('admin/news/index');
    }
}