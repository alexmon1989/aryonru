<?php

namespace Fuel\Migrations;

class Create_items_i18ns
{
	public function up()
	{
		\DBUtil::create_table('items_i18n', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'item_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'title' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'description' => array('type' => 'text', 'null' => true),
                        'language_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('items_i18n');
	}
}