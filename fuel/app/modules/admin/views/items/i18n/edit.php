<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "main_info" ); ?>'><?php echo Html::anchor('admin/items/edit/' . $item->id, 'Основная инофрмация');?></li>
	<li class='<?php echo Arr::get($subnav, "ru_info" ); ?>'><?php echo Html::anchor('admin/items/i18n/edit/ru/' . $item->id, 'Русская версия');?></li>
	<li class='<?php echo Arr::get($subnav, "en_info" ); ?>'><?php echo Html::anchor('admin/items/i18n/edit/en/' . $item->id, 'English version');?></li>
	<li class='<?php echo Arr::get($subnav, "os_info" ); ?>'><?php echo Html::anchor('admin/items/i18n/edit/os/' . $item->id, 'Ирон');?></li>
</ul>

<h2>Редактирование товара <span class='muted'>"<?php echo current($item->items_i18n)->title ?>"</span></h2>
<br>

<?php echo render('items/i18n/_form'); ?>

<p>
	<?php echo Html::anchor('admin/items/index', 'Назад ко всем товарам'); ?></p>
