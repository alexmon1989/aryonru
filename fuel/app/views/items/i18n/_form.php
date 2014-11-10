<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Item id', 'item_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('item_id', Input::post('item_id', isset($items_i18n) ? $items_i18n->item_id : ''), array('class' => 'span4', 'placeholder'=>'Item id')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('title', Input::post('title', isset($items_i18n) ? $items_i18n->title : ''), array('class' => 'span4', 'placeholder'=>'Title')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Description', 'description', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('description', Input::post('description', isset($items_i18n) ? $items_i18n->description : ''), array('class' => 'span8', 'rows' => 8, 'placeholder'=>'Description')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Language_id', 'language_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('language_id', Input::post('language_id', isset($items_i18n) ? $items_i18n->language_id : ''), array('class' => 'span4', 'placeholder'=>'Language_id')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>