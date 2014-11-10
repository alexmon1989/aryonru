<?php
return array(
	'_root_'  => 'main/main',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
    
    '(:any)/main' => 'main/main',
    '(:any)/main/show_callme' => 'main/main/show_callme',
    '(:any)/about' => 'main/about',
    '(:any)/contacts' => 'main/contacts',
    '(:any)/news' => 'main/news',
    '(:any)/news/page/(:num)' => 'main/news/index/$2',
    '(:any)/news/show/(:num)' => 'main/news/show/$2',
    '(:any)/catalog' => 'main/catalog',
    '(:any)/catalog/index/(:any)' => 'main/catalog/index/$2',
    '(:any)/catalog/show/(:any)' => 'main/catalog/show/$2',
    '(:any)/catalog/add_to_cart' => 'main/catalog/add_to_cart',
    '(:any)/cart' => 'main/cart',
    '(:any)/cart/enter-details' => 'main/cart/enter_details',
    '(:any)/cart/pay' => 'main/cart/pay',
    '(:any)/cart/remove/(:num)' => 'main/cart/remove/$2',
    
    'admin' => 'admin/news/index',
);
