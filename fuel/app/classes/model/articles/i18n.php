<?php

class Model_Articles_I18n extends \Orm\Model
{
    protected static $_properties = array(
            'id',
            'article_id',
            'title',
            'description',
            'keywords',
            'full_text',
            'language_id',
            'created_at',
            'updated_at',
    );

    protected static $_observers = array(
            'Orm\Observer_CreatedAt' => array(
                    'events' => array('before_insert'),
                    'mysql_timestamp' => false,
            ),
            'Orm\Observer_UpdatedAt' => array(
                    'events' => array('before_update'),
                    'mysql_timestamp' => false,
            ),
    );
    protected static $_table_name = 'articles_i18n';
    
    protected static $_belongs_to = array(
       'article_language' => array(
           'key_from' => 'language_id',
           'model_to' => 'Model_Articles_Language',
           'key_to' => 'id',
           'cascade_save' => true,
           'cascade_delete' => false,
       ),
       'article_parent' => array(
           'key_from' => 'article_id',
           'model_to' => 'Model_Articles_Article',
           'key_to' => 'id',
           'cascade_save' => true,
           'cascade_delete' => false,
       )
    );
    
    /**
     * Получение количества статей конкретного типа
     * 
     * @param string $type тип статей
     * @param string $language код языка
     * 
     * @return int
     */
    public static function get_articles_count($type = 'Новости', $language = 'rus')
    {
        return self::query()
                    ->related('article_parent')
                    ->related('article_parent.article_type')
                    ->related('article_language')
                    ->where('article_parent.article_type.value', $type)
                    ->where('article_language.value', $language)
                    ->order_by('article_id', 'DESC')
                    ->count();        
    }

    /**
     * Получение статей определенного типа и языка
     * 
     * @param string $type тип статей
     * @param string $language код языка
     * @param int $limit
     * @param int $offset
     * 
     * @return object
     */
    public static function get_articles($type = 'Новости', $language = 'rus', $limit = 999, $offset = 0)
    {
        return DB::select('articles_i18n.*')
                ->from('articles_i18n')
                ->join('articles')
                ->on('articles_i18n.article_id', '=', 'articles.id')
                ->join('articles_types')
                ->on('articles.article_type_id', '=', 'articles_types.id')
                ->join('articles_languages')
                ->on('articles_i18n.language_id', '=', 'articles_languages.id')
                ->where('articles_types.value', '=', $type)
                ->where('articles_languages.value', '=', $language)
                ->limit($limit)
                ->offset($offset)
                ->order_by('articles_i18n.id', 'DESC')
                ->as_object()
                ->execute();
    }
    
    /**
     * Получение отдельной статьи на конкретном языке
     * 
     * @param int $article_id id родительской статьи
     * @param string $language язык статьи
     */
    public static function get_article($article_id, $language = 'ru')
    {
        return self::query()
                    ->related('article_language')
                    ->where('article_id', '=', $article_id)
                    ->where('article_language.value', '=', $language)
                    ->get();
    }
    
    public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Название', 'required|max_length[255]');
		$val->add_field('description', 'Описание', 'max_length[200]');
		$val->add_field('keywords', 'Ключевые слова', 'max_length[250]');
		$val->add_field('full_text', 'Текст новости', 'required|max_length[65535]');

		return $val;
	}
}