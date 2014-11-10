<?php
use Orm\Model;

class Model_Items_I18n extends Model
{
	protected static $_properties = array(
		'id',
		'item_id',
		'title',
		'description',
		'keywords',
		'search_description',
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
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
        
        protected static $_table_name = 'items_i18n';
        
        protected static $_belongs_to = array(
            'item_parent' => array(
                'key_from' => 'item_id',
                'model_to' => 'Model_Items_Item',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            ),
            'item_language' => array(
                'key_from' => 'language_id',
                'model_to' => 'Model_Articles_Language',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,         
            ),
        );
        
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required');

		return $val;
	}

}
