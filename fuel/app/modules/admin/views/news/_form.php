<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Название', 'title', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('title', Input::post('title', isset($article) ? $article->title : ''), array('class' => 'span4', 'placeholder'=>'Название', 'required' => 'required')); ?>
			</div>
		</div>
        
        <div class="control-group">
			<?php echo Form::label('Описание (для поисковиков, не более 200 знаков)', 'description', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('description', Input::post('description', isset($article) ? $article->description : ''), array('class' => 'span4', 'placeholder'=>'Описание', 'rows' => 5)); ?>
			</div>
		</div>
        
        <div class="control-group">
			<?php echo Form::label('Ключевые слова (для поисковиков, не более 250 знаков)', 'keywords', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('keywords', Input::post('keywords', isset($article) ? $article->keywords : ''), array('class' => 'span4', 'placeholder'=>'Ключевые слова', 'rows' => 5)); ?>
			</div>
		</div>
        
        <div class="control-group">
			<?php echo Form::label('Текст новости', 'full_text', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('full_text', Input::post('full_text', isset($article) ? $article->full_text : ''), array('class' => 'span10 ckeditor', 'id' => 'ckeditor', 'placeholder'=>'Текст новости', 'rows' => 15)); ?>
			</div>
		</div>
        
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>
            </div>
		</div>
	</fieldset>

<?php echo Form::close(); ?>