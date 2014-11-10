<?php
use Orm\Model;

class Model_Callme extends Model
{
	protected static $_properties = array(
		'id',
		'username',
		'telephone',
		'message',
		'status',
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

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[255]');
		$val->add_field('telephone', 'Telephone', 'required|max_length[32]');
		$val->add_field('message', 'Message', 'required');
		$val->add_field('status', 'Status', 'required|valid_string[numeric]');

		return $val;
	}
        
        public static function validate_create($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[255]');
		$val->add_field('telephone', 'Telephone', 'required|max_length[32]');
		$val->add_field('message', 'Message', 'required');

		return $val;
	}
}
