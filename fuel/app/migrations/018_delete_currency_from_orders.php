<?php

namespace Fuel\Migrations;

class Delete_currency_from_orders
{
	public function up()
	{
		\DBUtil::drop_fields('orders', array(
			'currency'

		));
	}

	public function down()
	{
		\DBUtil::add_fields('orders', array(
			'currency' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),

		));
	}
}