<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('bootstrap-responsive.css'); ?>
        <?php echo Asset::js('bootstrap.min.js'); ?>
        <?php echo Asset::js('tinymce/tinymce.min.js'); ?>
        <?php echo Asset::js('tinymce_settings.js'); ?>
	<style>
		body { margin: 60px; }
                .navbar .nav > li > a {
                    padding: 10px 10px;
                }
	</style>
</head>
<body>
        <?php echo View::forge('template/top_menu'); ?>
    
	<div class="container">
		<div class="span12">
			<h1><?php echo $title; ?></h1>
			<hr>
                    <?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Успех</strong>
				<p>
				<?php echo html_entity_decode(implode('</p><p>', e((array) Session::get_flash('success')))); ?>
				</p>
			</div>
                    <?php endif; ?>
                    <?php if (Session::get_flash('error')): ?>
			<div class="alert alert-error">
				<strong>Ошибка</strong>
				<p>
				<?php echo html_entity_decode(implode('</p><p>', e((array) Session::get_flash('error')))); ?>
				</p>
			</div>
                    <?php endif; ?>
		</div>
            
		<div class="span12">
                    <?php echo $content; ?>
		</div>
            
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
</body>
</html>
