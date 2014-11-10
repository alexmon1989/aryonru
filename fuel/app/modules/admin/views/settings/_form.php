<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('name', Input::post('name', isset($setting) ? $setting->name : ''), array('class' => 'span4', 'placeholder'=>'Name')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Value', 'value', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('value', Input::post('value', isset($setting) ? $setting->value : ''), array('class' => 'span4', 'placeholder'=>'Value')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>