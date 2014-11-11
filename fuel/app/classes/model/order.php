<?php

class Model_Order extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'telephone',
		'email',
		'address',
		'user_comments',
		'price',
		'currency',
		'payed',
		'operator_comments',
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
	protected static $_table_name = 'orders';
        
        protected static $_has_many = array(
            'orders_items' => array(
                'key_from' => 'id',
                'model_to' => 'Model_Orders_Item',
                'key_to' => 'order_id',
                'cascade_save' => true,
                'cascade_delete' => true,
            )
        );
        
        public static function validate($factory)
	{
		$val = \Validation::forge($factory);
		$val->add_field('username', Lang::get('store.username'), 'required|max_length[255]');
		$val->add_field('telephone', Lang::get('store.telephone'), 'required|max_length[255]');
		$val->add_field('address', Lang::get('store.address'), 'required|max_length[255]');
		$val->add_field('email', Lang::get('store.email'), 'required|valid_email|max_length[255]');

		return $val;
	}

}
