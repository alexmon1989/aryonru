<?php

namespace Fuel\Migrations;

class Create_orders
{
	public function up()
	{
		\DBUtil::create_table('orders', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'username' => array('constraint' => 255, 'type' => 'varchar'),
			'telephone' => array('constraint' => 128, 'type' => 'varchar'),
			'email' => array('constraint' => 64, 'type' => 'varchar'),
			'address' => array('constraint' => 255, 'type' => 'varchar'),
			'user_comments' => array('type' => 'text'),
			'price' => array('type' => 'float'),
			'currency' => array('constraint' => 3, 'type' => 'varchar'),
			'payed' => array('constraint' => 1, 'type' => 'int', 'default' => '0'),
			'operator_comments' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('orders');
	}
}