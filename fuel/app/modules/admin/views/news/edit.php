<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "ru" ); ?>'><?php echo Html::anchor('admin/news/edit/' . $id . '/ru','Русская версия');?></li>
	<li class='<?php echo Arr::get($subnav, "en" ); ?>'><?php echo Html::anchor('admin/news/edit/' . $id . '/en','English version');?></li>
	<li class='<?php echo Arr::get($subnav, "os" ); ?>'><?php echo Html::anchor('admin/news/edit/' . $id . '/os','Ирон');?></li>

</ul>

<?php echo render('news/_form'); ?>
<p>
	<?php echo Html::anchor('admin/news/index', 'Назад ко всем новостям'); ?></p>