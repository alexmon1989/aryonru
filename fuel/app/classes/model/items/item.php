<?php
use Orm\Model;

class Model_Items_Item extends Model
{
	protected static $_properties = array(
		'id',
		'category_id',
		'price',
		'photo_name',
		'is_promotion',
		'discount',
		'visible',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
        
        protected static $_table_name = 'items';
        
        // Отношение "Один-ко-многим" с табличкой items_i18n
        protected static $_has_many = array(
            'items_i18n' => array(
                'key_from' => 'id',
                'model_to' => 'Model_Items_I18n',
                'key_to' => 'item_id',
                'cascade_save' => true,
                'cascade_delete' => true,
            )
        );
        
        protected static $_belongs_to = array(
            'item_category' => array(
                'key_from' => 'category_id',
                'model_to' => 'Model_Items_Category',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            )
        );
        
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('category_id', 'Категори', 'required|valid_string[numeric]');
		$val->add_field('price', 'Цена', 'required|valid_string[numeric]');
		$val->add_field('visible', 'Видимость', 'valid_string[numeric]');
		$val->add_field('is_promotion', 'Акция', 'valid_string[numeric]');
		$val->add_field('discount', 'Скидка', 'valid_string[numeric]');

		return $val;
	}
        
        /**
         * Получение товаров определенной категории
         * 
         * @param string $language
         * @param int $category_id
         * @param int $limit
         * @param int $offset
         */
        public static function get_items($language = 'ru', $category_id = 'all', $limit = null, $offset = null, $order_by = 'items.id', $order_method = 'DESC', $search = null)
        {
            $sql = 'SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_' . $language . '` AS category, 
                            `items_categories`.`id` AS category_id,   
                             `items_i18n`.`title`, `items_i18n`.`description`, `items`.`is_promotion`, `items`.`discount` 
                     FROM `items` 
                     INNER JOIN `items_categories` 
                           ON (`items_categories`.`id` = `items`.`category_id`) 
                     JOIN `items_i18n` 
                           ON (`items_i18n`.`item_id` = `items`.`id`) 
                     JOIN `articles_languages` 
                           ON (`items_i18n`.`language_id` = `articles_languages`.`id`) 
                     WHERE `articles_languages`.`value` = \''.$language.'\'';
            if ($category_id != 'all')
            {
                $sql .= ' AND items_categories.id = '.$category_id;
            }
            
            if (!is_null($search))
            {
                $sql .= ' AND `items_i18n`.`title` LIKE \'%'.$search.'%\'';
            }
            
            
            $sql .= ' ORDER BY ' . $order_by . ' ' . $order_method;
            
            if (!is_null($limit) and !is_null($offset))
            {
                $sql .= ' LIMIT ' . $limit.
                        ' OFFSET ' . $offset;
            }
            
            $items = \DB::query($sql)
                          ->as_object('Model_Items_Item')
                          ->execute();
            
            return $items;
        }
        
        /**
         * Получение товара
         * 
         * @param int $id
         * @param string $language
         * 
         * @return object
         */
        public static function get_item($id, $language = 'ru')
        {
            $sql = 'SELECT `items`.`id`, `items`.`photo_name`, 
                            `items`.`price`, `items`.`discount`, 
                            `items_categories`.`title_' . $language . '` AS category, 
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
                     WHERE `articles_languages`.`value` = \''.$language.'\' AND
                           `items`.`id` = '.$id;
            
            $item = \DB::query($sql)
                          ->as_object('Model_Items_Item')
                          ->execute();
            
            return $item;
        }
}
