<?php

namespace Fuel\Migrations;

class Add_count_to_orders_items
{
	public function up()
	{
		\DBUtil::add_fields('orders_items', array(
			'count' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('orders_items', array(
			'count'

		));
	}
}