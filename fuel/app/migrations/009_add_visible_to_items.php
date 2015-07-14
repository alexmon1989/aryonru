<?php

namespace Fuel\Migrations;

class Add_visible_to_items
{
	public function up()
	{
		\DBUtil::add_fields('items', array(
			'visible' => array('constraint' => 1, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('items', array(
			'visible'

		));
	}
}