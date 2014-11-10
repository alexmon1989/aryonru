<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('username', Input::post('username', isset($callme) ? $callme->username : ''), array('class' => 'span4', 'placeholder'=>'Username')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Telephone', 'telephone', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('telephone', Input::post('telephone', isset($callme) ? $callme->telephone : ''), array('class' => 'span4', 'placeholder'=>'Telephone')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Message', 'message', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('message', Input::post('message', isset($callme) ? $callme->message : ''), array('class' => 'span8', 'rows' => 8, 'placeholder'=>'Message')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Status', 'status', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('status', Input::post('status', isset($callme) ? $callme->status : ''), array('class' => 'span4', 'placeholder'=>'Status')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>