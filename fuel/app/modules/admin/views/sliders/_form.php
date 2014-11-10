<?php echo Form::open(array("class"=>"form-horizontal", 'enctype' => 'multipart/form-data')); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Выберите изображение (940px * 430px)', 'userfile', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::file('userfile', array('class' => 'span4', 'placeholder'=>'Img path')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Ссылка: <b>aryon.ru/</b>', 'uri', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('uri', Input::post('uri', isset($slider) ? $slider->uri : ''), array('class' => 'span4', 'placeholder'=>'Относительная ссылка')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>