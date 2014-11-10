<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.6
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Url_lang;

use \Fuel\Core\Uri;

class Url_lang
{
    /**
     * Метод для генерирования ссылки на текущую страницу на любом языке
     * 
     * @param string $lang Идентификатор языка
     */
    public static function create($lang = 'ru')
    {
        $segments = Uri::segments();
                
        if (!empty($segments))
        {
            $uri = $lang . '/';
            for ($i = 1; $i <= count($segments) - 1; $i++)
            {
                $uri .= $segments[$i] . '/';
            }
            return Uri::create($uri);
        }
        else
            return Uri::create($lang . '/main');
        
        
    }
}
