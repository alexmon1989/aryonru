<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Category id', 'category_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('category_id', Input::post('category_id', isset($item) ? $item->category_id : ''), array('class' => 'span4', 'placeholder'=>'Category id')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Price', 'price', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('price', Input::post('price', isset($item) ? $item->price : ''), array('class' => 'span4', 'placeholder'=>'Price')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Photo name', 'photo_name', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('photo_name', Input::post('photo_name', isset($item) ? $item->photo_name : ''), array('class' => 'span4', 'placeholder'=>'Photo name')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Is promotion', 'is_promotion', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('is_promotion', Input::post('is_promotion', isset($item) ? $item->is_promotion : ''), array('class' => 'span4', 'placeholder'=>'Is promotion')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Discount', 'discount', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('discount', Input::post('discount', isset($item) ? $item->discount : ''), array('class' => 'span4', 'placeholder'=>'Discount')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>