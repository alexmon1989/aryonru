<?php

namespace Fuel\Migrations;

class Create_articles_i18n
{
	public function up()
	{
		\DBUtil::create_table('articles_i18n', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'article_id' => array('constraint' => 11, 'type' => 'int'),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'description' => array('type' => 'text'),
			'keywords' => array('type' => 'text'),
			'full_text' => array('type' => 'text'),
			'language_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('articles_i18n');
	}
}