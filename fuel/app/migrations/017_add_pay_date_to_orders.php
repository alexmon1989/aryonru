<?php

namespace Fuel\Migrations;

class Add_pay_date_to_orders
{
	public function up()
	{
		\DBUtil::add_fields('orders', array(
			'pay_date' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('orders', array(
			'pay_date'

		));
	}
}