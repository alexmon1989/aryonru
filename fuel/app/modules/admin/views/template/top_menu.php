<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo Html::anchor('#', 'Административная панель', array('class' => 'brand')) ?>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class='<?php echo Arr::get($subnav, "news" ); ?>'><?php echo Html::anchor('admin/news/index', 'Новости') ?></li>
          <li class="dropdown <?php echo Arr::get($subnav, 'pages'); ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Страницы
            <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><?php echo Html::anchor('admin/main/index', 'Главная') ?></li>
                <li><?php echo Html::anchor('admin/about/index', 'О компании') ?></li>
                <li><?php echo Html::anchor('admin/contacts/index', 'Обратная связь') ?></li>
            </ul>
          </li>
          <li class='<?php echo Arr::get($subnav, 'sliders'); ?>'><?php echo Html::anchor('admin/sliders/index', 'Слайдеры') ?></li>
          <li class='<?php echo Arr::get($subnav, 'items'); ?>'><?php echo Html::anchor('admin/items/index', 'Товары') ?></li>
          <li class='<?php echo Arr::get($subnav, 'orders'); ?>'><?php echo Html::anchor('admin/orders/index', 'Заказы') ?></li>
          <li class='<?php echo Arr::get($subnav, 'callme'); ?>'><?php echo Html::anchor('admin/callme/index', 'Перезвонить') ?></li>
          <li class='<?php echo Arr::get($subnav, 'users'); ?>'><?php echo Html::anchor('admin/users/index', 'Пользователи') ?></li>
          <li class='<?php echo Arr::get($subnav, 'settings'); ?>'><?php echo Html::anchor('admin/settings/index', 'Настройки') ?></li>
        </ul>
          
        <ul class="nav pull-right">
          <li><?php echo Html::anchor(Uri::base(), 'На сайт', array('target' => '_blank')); ?></li>
          <li class="divider-vertical"></li>
          <li><?php echo Html::anchor('admin/users/logout', 'Выход'); ?></li>          
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>