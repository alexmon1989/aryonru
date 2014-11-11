<?php

class Model_Orders_Item extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'order_id',
		'item_id',
		'count'
	);
	
	protected static $_table_name = 'orders_items';
        
        protected static $_belongs_to = array(
            'item_parent' => array(
                'key_from' => 'item_id',
                'model_to' => 'Model_Items_Item',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            ),
            'order_parent' => array(
                'key_from' => 'order_id',
                'model_to' => 'Model_Order',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,         
            ),
        );

}
