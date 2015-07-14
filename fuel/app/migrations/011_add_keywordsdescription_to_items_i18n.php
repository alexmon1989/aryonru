<?php

namespace Fuel\Migrations;

class Add_keywordsdescription_to_items_i18n
{
	public function up()
	{
		\DBUtil::add_fields('items_i18n', array(
			'keywords' => array('type' => 'text'),
			'search_description' => array('type' => 'text'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('items_i18n', array(
			'keywords'
,			'search_description'

		));
	}
}