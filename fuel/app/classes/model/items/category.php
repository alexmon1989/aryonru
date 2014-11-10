<?php
use Orm\Model;

class Model_Items_Category extends Model
{
	protected static $_properties = array(
		'id',
		'title_ru',
		'title_en',
		'title_os',
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

    protected static $_has_many = array(
        'items' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Items_Item',
            'key_to' => 'category_id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    ); 
        
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title_ru', 'Название по-русски', 'required|max_length[255]');
		$val->add_field('title_en', 'Название по-английски', 'required|max_length[255]');
		$val->add_field('title_os', 'Название по-осетински', 'required|max_length[255]');

		return $val;
	}

}
