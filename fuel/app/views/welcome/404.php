<!doctype html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" lang="ru"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="ru"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="ru"><![endif]-->
<!--[if gt IE 8]><!--><html lang="ru"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>404 Error</title>

    <base href="<?php echo Uri::base(); ?>">

    <?php echo Asset::css('framework.min.css'); ?>

    <!--[if lt IE 9]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div class="g">
    <div class="g-row">
        <div class="g-2">&nbsp;</div><!-- g-5 -->
        <div class="g-6">
            <?php echo Asset::img('404.jpg', array('width' => '460')); ?>
        </div><!-- g-5 -->
        <div class="g-2">&nbsp;</div><!-- g-5 -->
    </div><!-- g-row -->

    <div class="g-row">
        <div class="g-2">&nbsp;</div><!-- g-5 -->
        <div class="g-6" style="text-align: center">
            <h1 style="text-align: center">Страница не найдена.</h1>
            Страница, которую вы хотели открыть, почему-то не найдена.
            <br>
            Наверное, случилось что-то ужасное, и мы на всякий случай просим прощения.
            <br>
            <br>
            Может быть, попробуете перейти на <?php echo Html::anchor('/', 'главную страницу'); ?>?
            <br>
            <br>
            (Ошибка 404 - страница не найдена \ 404 Not Found)
        </div><!-- g-5 -->
        <div class="g-2">&nbsp;</div><!-- g-5 -->
    </div><!-- g-row -->
</div><!-- g -->

</body>
</html>