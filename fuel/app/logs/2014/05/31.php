<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2014-05-31 04:09:25 --> Warning - PDO::query(): MySQL server has gone away with query: "SELECT `t0`.`id` AS `t0_c0`, `t0`.`name` AS `t0_c1`, `t0`.`value` AS `t0_c2`, `t0`.`created_at` AS `t0_c3`, `t0`.`updated_at` AS `t0_c4` FROM `settings` AS `t0`" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-05-31 04:09:29 --> Warning - PDO::query(): MySQL server has gone away with query: "SELECT `t0`.`id` AS `t0_c0`, `t0`.`img_path` AS `t0_c1`, `t0`.`uri` AS `t0_c2`, `t0`.`position` AS `t0_c3`, `t0`.`created_at` AS `t0_c4`, `t0`.`updated_at` AS `t0_c5` FROM `sliders` AS `t0` ORDER BY `t0`.`position` ASC" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-05-31 04:09:51 --> Warning - PDO::query(): MySQL server has gone away with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_en` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'en' AND items_categories.id = 6 ORDER BY items.id desc LIMIT 6 OFFSET 0" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
ERROR - 2014-05-31 04:09:52 --> Warning - PDO::query(): MySQL server has gone away with query: "SELECT COUNT(DISTINCT `t0`.`id`) AS count_result FROM `items` AS `t0` WHERE `t0`.`category_id` <> 'null'" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
