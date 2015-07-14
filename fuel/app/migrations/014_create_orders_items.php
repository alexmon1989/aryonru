<?php

namespace Fuel\Migrations;

class Create_orders_items
{
	public function up()
	{
		\DBUtil::create_table('orders_items', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'order_id' => array('constraint' => 11, 'type' => 'int'),
			'item_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('orders_items');
	}
}