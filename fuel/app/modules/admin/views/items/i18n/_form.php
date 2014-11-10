<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Название', 'title', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('title', Input::post('title', isset($item_i18n) ? $item_i18n->title : ''), array('class' => 'span4', 'placeholder'=>'Название')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Описание', 'description', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('description', Input::post('description', isset($item_i18n) ? $item_i18n->description : ''), array('class' => 'span8 tinymce', 'rows' => 8, 'placeholder'=>'Описание')); ?>

			</div>
		</div>
        <div class="control-group">
			<?php echo Form::label('Ключевые слова', 'keywords', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('keywords', Input::post('keywords', isset($item_i18n) ? $item_i18n->keywords : ''), array('class' => 'span6', 'rows' => 8, 'placeholder'=>'Ключевые слова')); ?>

			</div>
		</div><div class="control-group">
			<?php echo Form::label('Описание для поисковых систем', 'search_description', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('search_description', Input::post('search_description', isset($item_i18n) ? $item_i18n->search_description : ''), array('class' => 'span6', 'rows' => 8, 'placeholder'=>'Описание для поисковых систем')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>