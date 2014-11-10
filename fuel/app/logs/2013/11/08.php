<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2013-11-08 13:41:32 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:39 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:42 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:42 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:46 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:49 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:51 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:41:52 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:43:55 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:43:57 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:44:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 13:44:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:07:40 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:07:43 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:07:53 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:07:53 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '6 OFFSET 0' at line 12 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                                             `items`.`price`, `items`.`discount`, 
                                             `items_categories`.`title_ru` AS category, 
                                              `items_i18n`.`title`, `items_i18n`.`description`  
                                      FROM `items` 
                                      INNER JOIN `items_categories` 
                                            ON (`items_categories`.`id` = `items`.`category_id`) 
                                      JOIN `items_i18n` 
                                            ON (`items_i18n`.`item_id` = `items`.`id`) 
                                      JOIN `articles_languages` 
                                            ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                                      WHERE `articles_languages`.`value` = 'ru' AND item_category.id = 4LIMIT 6 OFFSET 0" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:08:47 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:08:47 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.title_ru' in 'field list' with query: "SELECT `t0`.`id` AS `t0_c0`, `t0`.`title_ru` AS `t0_c1`, `t0`.`title_en` AS `t0_c2`, `t0`.`title_os` AS `t0_c3`, `t0`.`created_at` AS `t0_c4`, `t0`.`updated_at` AS `t0_c5` FROM `items_categories` AS `t0`" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:08:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:08:48 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.title_ru' in 'field list' with query: "SELECT `t0`.`id` AS `t0_c0`, `t0`.`title_ru` AS `t0_c1`, `t0`.`title_en` AS `t0_c2`, `t0`.`title_os` AS `t0_c3`, `t0`.`created_at` AS `t0_c4`, `t0`.`updated_at` AS `t0_c5` FROM `items_categories` AS `t0`" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:08:49 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:08:49 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.title_ru' in 'field list' with query: "SELECT `t0`.`id` AS `t0_c0`, `t0`.`title_ru` AS `t0_c1`, `t0`.`title_en` AS `t0_c2`, `t0`.`title_os` AS `t0_c3`, `t0`.`created_at` AS `t0_c4`, `t0`.`updated_at` AS `t0_c5` FROM `items_categories` AS `t0`" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:09:52 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:10:08 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:10:08 --> Notice - Undefined variable: title in D:\xampp\htdocs\store-dev\fuel\app\modules\main\views\template\template.php on line 13
WARNING - 2013-11-08 14:10:13 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:10:13 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '6 OFFSET 0' at line 12 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                                             `items`.`price`, `items`.`discount`, 
                                             `items_categories`.`title_ru` AS category, 
                                              `items_i18n`.`title`, `items_i18n`.`description`  
                                      FROM `items` 
                                      INNER JOIN `items_categories` 
                                            ON (`items_categories`.`id` = `items`.`category_id`) 
                                      JOIN `items_i18n` 
                                            ON (`items_i18n`.`item_id` = `items`.`id`) 
                                      JOIN `articles_languages` 
                                            ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                                      WHERE `articles_languages`.`value` = 'ru' AND item_category.id = 4LIMIT 6 OFFSET 0" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:13:06 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:13:07 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:13:07 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '6 OFFSET 0' at line 12 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                                             `items`.`price`, `items`.`discount`, 
                                             `items_categories`.`title_ru` AS category, 
                                              `items_i18n`.`title`, `items_i18n`.`description`  
                                      FROM `items` 
                                      INNER JOIN `items_categories` 
                                            ON (`items_categories`.`id` = `items`.`category_id`) 
                                      JOIN `items_i18n` 
                                            ON (`items_i18n`.`item_id` = `items`.`id`) 
                                      JOIN `articles_languages` 
                                            ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                                      WHERE `articles_languages`.`value` = 'ru' AND item_category.id = 4LIMIT 6 OFFSET 0" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:13:30 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:13:30 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'item_category.id' in 'where clause' with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                                             `items`.`price`, `items`.`discount`, 
                                             `items_categories`.`title_ru` AS category, 
                                              `items_i18n`.`title`, `items_i18n`.`description`  
                                      FROM `items` 
                                      INNER JOIN `items_categories` 
                                            ON (`items_categories`.`id` = `items`.`category_id`) 
                                      JOIN `items_i18n` 
                                            ON (`items_i18n`.`item_id` = `items`.`id`) 
                                      JOIN `articles_languages` 
                                            ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                                      WHERE `articles_languages`.`value` = 'ru' AND item_category.id = 4 LIMIT 6 OFFSET 0" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:14:20 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:14:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:16:11 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:16:14 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:16:20 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:16:51 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:16:52 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:17:04 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:17:06 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:17:15 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:17:25 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:17:29 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:18:05 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:18:08 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:18:11 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:18:13 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:18:33 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:18:52 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:18:55 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:19:40 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:25:34 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:25:34 --> 4096 - Argument 1 passed to Orm\Query::_parse_where_array() must be of the type array, string given, called in D:\xampp\htdocs\store-dev\fuel\packages\orm\classes\query.php on line 566 and defined in D:\xampp\htdocs\store-dev\fuel\packages\orm\classes\query.php on line 553
WARNING - 2013-11-08 14:25:57 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:26:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:26:02 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:28:08 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:28:12 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:28:15 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:07 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:07 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:10 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:10 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:23 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:23 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:26 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:26 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:36 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:37 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:29:57 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:31:13 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:32:02 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:32:02 --> 4096 - Object of class Model_Items_Category could not be converted to string in D:\xampp\htdocs\store-dev\fuel\app\modules\main\views\catalog\index.php on line 41
WARNING - 2013-11-08 14:32:13 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:32:18 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:32:42 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:25 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:27 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:29 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:33 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:41 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:42 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:43 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:33:50 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:34:45 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:35:24 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:35:24 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS category, 
                                              `items_i18n`.`title`' at line 3 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                                             `items`.`price`, `items`.`discount`, 
                                             `items_categories`.`title_`os AS category, 
                                              `items_i18n`.`title`, `items_i18n`.`description`  
                                      FROM `items` 
                                      INNER JOIN `items_categories` 
                                            ON (`items_categories`.`id` = `items`.`category_id`) 
                                      JOIN `items_i18n` 
                                            ON (`items_i18n`.`item_id` = `items`.`id`) 
                                      JOIN `articles_languages` 
                                            ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                                      WHERE `articles_languages`.`value` = 'os' LIMIT 6 OFFSET 0" in D:\xampp\htdocs\store-dev\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2013-11-08 14:35:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:36:05 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:36:17 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:38:04 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:39:37 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 14:39:37 --> Error - Could not find asset: items/ in D:\xampp\htdocs\store-dev\fuel\core\classes\asset\instance.php on line 249
WARNING - 2013-11-08 14:39:59 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:41:41 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:41:42 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:42:22 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:42:32 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:42:39 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:42:46 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:42:56 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:43:24 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:43:30 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:43:57 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:44:06 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:44:14 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:45:33 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:46:54 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:46:56 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:47:13 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:47:19 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:47:22 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:50:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:50:59 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:51:13 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:51:21 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:52:12 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:52:29 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:52:39 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:53:06 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:54:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:54:06 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:54:46 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:55:05 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:55:58 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:56:20 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:56:47 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:57:24 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:57:31 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:57:39 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:57:57 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:58:51 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:59:08 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:59:16 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 14:59:22 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:00:09 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:02:16 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:02:28 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:02:31 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:02:55 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:03:25 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:03:35 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:03:46 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:04:12 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:04:13 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:04:14 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:04:18 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:04:46 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:04:54 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:05:01 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:05:04 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:07:30 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:07:34 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:08:59 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:09:33 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:09:55 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:10:26 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:06 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:14 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:17 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:19 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:21 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:23 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:26 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:28 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:29 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:11:31 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:12:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:12:09 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:13:03 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:13:16 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:13:34 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:13:51 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:14:33 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:14:41 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:14:47 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:15:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:15:23 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:16:29 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:17:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:18:22 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:18:39 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:21:09 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:21:48 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:22:15 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:22:26 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:22:33 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:22:34 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:24:44 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:25:12 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:25:28 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:25:54 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:26:31 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:26:47 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:28:29 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:28:57 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:00 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:04 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:11 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:14 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:17 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:19 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:21 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:23 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:51 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:53 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:56 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:29:59 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:30:01 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:30:03 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:32:51 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:32:57 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:33:19 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:33:21 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:33:22 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:33:24 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:53:30 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:53:58 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:54:20 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:54:31 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:56:43 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:57:40 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:58:36 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:58:52 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 15:58:54 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:00:10 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:00:12 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:00:15 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:00:17 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:01:17 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:01:21 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:02:07 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:02:16 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:04:01 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:04:07 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:04:30 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:41:43 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
ERROR - 2013-11-08 16:41:44 --> Notice - Undefined variable: title in D:\xampp\htdocs\store-dev\fuel\app\modules\main\views\template\template.php on line 13
WARNING - 2013-11-08 16:42:14 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 16:42:15 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 21:35:50 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 21:35:52 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 21:36:15 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 21:36:17 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 21:36:18 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 21:36:22 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
WARNING - 2013-11-08 21:36:40 --> Fuel\Core\Fuel::init - The configured locale ru_RU is not installed on your system.
