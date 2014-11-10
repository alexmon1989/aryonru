<?php

class Model_Articles_Type extends \Orm\Model
{
    protected static $_properties = array(
            'id',
            'value',
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
    protected static $_table_name = 'articles_types';

    // Отношение "Один-ко-многим" с табличкой articles
    protected static $_has_many = array(
            'articles' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Articles',
            'key_to' => 'article_type_id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );
}
