<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Название по-русски', 'title_ru', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('title_ru', Input::post('title_ru', isset($items_category) ? $items_category->title_ru : ''), array('class' => 'span4', 'placeholder'=>'Название по-русски')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Название по-английски', 'title_ru', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('title_en', Input::post('title_en', isset($items_category) ? $items_category->title_en : ''), array('class' => 'span4', 'placeholder'=>'Название по-английски')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Название по-осетински', 'title', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('title_os', Input::post('title_os', isset($items_category) ? $items_category->title_os : ''), array('class' => 'span4', 'placeholder'=>'Название по-осетински')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>