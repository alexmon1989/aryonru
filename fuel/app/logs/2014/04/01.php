<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2014-04-01 04:03:57 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '/proc/self/environ asc LIMIT 6 OFFSET 0' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY /proc/self/environ asc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:03:58 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '/proc/self/environ' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY /proc/self/environ  asc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:00 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near './../../../../../../../../../etc/passwd asc LIMIT 6 OFFSET 0' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY ../../../../../../../../../../etc/passwd asc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
p on line 208
ERROR - 2014-04-01 04:03:59 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '/../../../../../../../../../../proc/self/environ' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY /../../../../../../../../../../proc/self/environ  asc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:01 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '/../../../../../../../../../../etc/passwd asc LIMIT 6 OFFSET 0' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY /../../../../../../../../../../etc/passwd asc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
tax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '/etc/passwd' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY /etc/passwd  asc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:02 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'proc' in 'order clause' with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion /proc/self/environ LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
`value` = 'ru' ORDER BY ../../../../../../../../../../etc/passwd  asc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:04 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near './../../../../../../../../../etc/passwd LIMIT 6 OFFSET 0' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion ../../../../../../../../../../etc/passwd LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
--> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near './../../../../../../../../../proc/self/environ LIMIT 6 OFFSET 0' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion ../../../../../../../../../../proc/self/environ LIMIT 6 OFERROR - 2014-04-01 04:04:03 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'etc' in 'order clause' with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion /etc/passwd LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
(`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion /../../../../../../../../../../proc/self/environ  LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:03 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion /etc/passwd  LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:04 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near './../../../../../../../../../etc/passwd LIMIT 6 OFFSET 0' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion /../../../../../../../../../../etc/passwd LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:05 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near './../../../../../../../../../etc/passwd' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion ../../../../../../../../../../etc/passwd  LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-04-01 04:04:05 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near './../../../../../../../../../etc/passwd' at line 13 with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' ORDER BY items.is_promotion /../../../../../../../../../../etc/passwd  LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
