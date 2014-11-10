<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "ru" ); ?>'><?php echo Html::anchor('admin/main/index/ru/','Русская версия');?></li>
	<li class='<?php echo Arr::get($subnav, "en" ); ?>'><?php echo Html::anchor('admin/main/index/en','English version');?></li>
	<li class='<?php echo Arr::get($subnav, "os" ); ?>'><?php echo Html::anchor('admin/main/index/os','Ирон');?></li>
</ul>

<?php echo render('news/_form'); ?>
