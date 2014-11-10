<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
	<div class="container">
		<div class="span12">
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Успех</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-error">
				<strong>Ошибка</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="span12">
            <center><h2>Авторизация</h2></center>
            <br><br>
            <div class="row">
                <div class="span3">&nbsp;</div>
                <div class="span5">
                        <?php echo Form::open(array("class"=>"form-horizontal", 'autocomplete' => 'off')); ?>
                            <fieldset>
                                <div class="control-group">
                                    <?php echo Form::label('Логин', 'username', array('class'=>'control-label')); ?>

                                    <div class="controls">
                                        <?php echo Form::input('username', Input::post('username'), array('class' => 'span3', 'placeholder'=>'Логин')); ?>

                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo Form::label('Пароль', 'password', array('class'=>'control-label')); ?>

                                    <div class="controls">
                                        <?php echo Form::input('password', Input::post('password'), array('type' => 'password', 'class' => 'span3', 'placeholder'=>'Пароль')); ?>

                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class='control-label'>&nbsp;</label>
                                    <div class='controls'>
                                        <?php echo Form::submit('submit', 'Войти', array('class' => 'btn btn-primary')); ?>			</div>
                                </div>
                            </fieldset>
                        <?php echo Form::close(); ?> 
                </div>
            </div>
		</div>
	</div>
</body>
</html>