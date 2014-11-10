<?php

class Model_Articles_Language extends \Orm\Model
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
    protected static $_table_name = 'articles_languages';

    
    // Отношение "Один-ко-многим" с табличкой articles_i18n
    protected static $_has_many = array(
            'articles_i18n' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Articles_I18n',
            'key_to' => 'language_id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );
}
