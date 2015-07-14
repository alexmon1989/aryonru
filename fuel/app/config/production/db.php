<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=idb2.majordomo.ru;dbname=b130659_aryon',
			'username'   => 'u130659',
			'password'   => 'sda92nmdneb',
		),
        'profiling'  => false,
	),
); 


/*return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=aryon',
			'username'   => 'root',
			'password'   => '',
		),
        'profiling'  => false,
	),
); */
