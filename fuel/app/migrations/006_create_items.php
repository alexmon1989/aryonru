<?php

namespace Fuel\Migrations;

class Create_items
{
	public function up()
	{
		\DBUtil::create_table('items', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'category_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'price' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'photo_name' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'is_promotion' => array('constraint' => 1, 'type' => 'int'),
			'discount' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('items');
	}
}