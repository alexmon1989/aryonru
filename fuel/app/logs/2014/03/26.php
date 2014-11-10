<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2014-03-26 11:47:23 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column '26ChromeHTML' in 'where clause' with query: "SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_ru` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, 
                             `items_i18n`.`keywords`, `items_i18n`.`search_description`, 
                             `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = 'ru' AND
                           `items`.`id` = 26ChromeHTML" in /home/u130659/aryonru/fuel/core/classes/database/pdo/connection.php on line 208
