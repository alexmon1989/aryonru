<?php
    // По странным причинам надо делать это тут..
    Config::set('language', $language);
    Lang::load('lang.yml');
?>
<!doctype html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" lang="ru"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="ru"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="ru"><![endif]-->
<!--[if gt IE 8]><!--><html lang="ru"><!--<![endif]-->
	<head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title><?php echo $title; ?></title>
            
            <base href="<?php echo Uri::base(); ?>">
            
            <?php echo Asset::css('framework.min.css'); ?>
            <?php echo Asset::css('style.css'); ?>
                        
            <script src="http://code.jquery.com/jquery-latest.min.js"></script>
                        
            <!-- SLIDER -->            
            <?php echo Asset::js('nivo-slider/jquery.nivo.slider.pack.js'); ?>
            <link rel="stylesheet" href="<?php echo Uri::create('assets/js/nivo-slider/nivo-slider.css'); ?>" type="text/css" />
            <link rel="stylesheet" href="<?php echo Uri::create('assets/js/nivo-slider/themes/light/light.css'); ?>" type="text/css" />
            
            <!-- MODAL -->            
            <?php echo Asset::js('tinybox2/tinybox.js'); ?>

            <!-- JS для добавления товаров в корзину -->
            <?php echo Asset::js('cart.js'); ?>
            
            
            <?php echo Asset::js('callme.js'); ?>
            
            <?php if (is_null($page) or $page == 'main'): ?>
                <!-- JCAROUSEL -->
                <?php echo Asset::js('jcarousel/lib/jquery.jcarousel.min.js'); ?>
                <link rel="stylesheet" type="text/css" href="<?php echo Uri::create('/assets/js/jcarousel/skins/tango/skin.css'); ?>" />
            <?php endif; ?>
                
            <?php if ($page == 'catalog'): ?>
                <!-- SLIMBOX -->
                <?php echo Asset::js('slimbox2.js'); ?>
                <?php echo Asset::css('slimbox/slimbox2.css'); ?>                
                
            <?php endif; ?>    
                
            <!--[if lt IE 9]>
            <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            
            <?php if (isset($meta)) echo Html::meta($meta); ?>
	</head>
	
	<body>
            <!-- HEADER -->
            <div class="header">
                <?php echo View::forge('template/header'); ?>
            </div>

            <div class="content">
                <div class="g">
                    <div class="g-row">
                        <div class="g-12">
                            <div class="g-row">
                                <div class="g-12">
                                    <h1><?php echo Lang::get('others.title'); ?></h1>
                                    <?php echo View::forge('template/slider'); ?>
                                </div>
                            </div>     

                            <?php 
                             if (is_null($page) or $page == 'main')
                                 echo View::forge('template/promotions'); 
                          ?>

                            <div class="g-row">
                                <div class="g-12">
                                    <div class="main-article">
                                        <?php echo $content; ?>
                                    </div>
                                </div>
                            </div>                        

                            <?php echo View::forge('template/social_buttons'); ?>
                        </div>
                    </div>
                </div> 
            </div>        

            <!-- FOOTER -->
            <div class="footer">
                <?php echo View::forge('template/footer'); ?>                     
            </div>
	</body>
</html>