<?php

namespace Fuel\Migrations;

class Add_issued_to_orders
{
	public function up()
	{
		\DBUtil::add_fields('orders', array(
			'issued' => array('constraint' => 1, 'type' => 'int', 'default' => '0'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('orders', array(
			'issued'

		));
	}
}