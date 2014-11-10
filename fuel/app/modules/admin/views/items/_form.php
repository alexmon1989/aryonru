<?php echo Form::open(array("class"=>"form-horizontal", 'enctype' => 'multipart/form-data')); ?>

	<fieldset>
        <p></p>
        
        <?php if (isset($item) and !is_null($item->photo_name)): ?>
            <div class="control-group">
                <?php echo Form::label('Старое изображение', '', array('class'=>'control-label')); ?>

                <div class="controls">
                    <?php echo Asset::img('items/'.$item->photo_name, array('width' => '400')); ?>
                </div>
            </div>
        <?php endif; ?>
        
		<div class="control-group">
			<?php echo Form::label('Категория', 'category_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::select('category_id', Input::post('category_id', isset($item) ? $item->category_id : ''), $categories, array('class' => 'span3', 'required' => 'required')); ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Цена, руб.', 'price', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('price', Input::post('price', isset($item) ? $item->price : ''), array('class' => 'span3', 'placeholder'=>'Цена', 'required' => 'required')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Фото', 'photo_name', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::file('photo_name', array('class' => 'span4', 'placeholder'=>'Фото')); ?>

			</div>
		</div>
		<div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <?php echo Form::checkbox('visible', 1, Input::post('visible', isset($item) ? $item->visible : '')); ?> Видимость
                </label>
            </div>
        </div>
		<div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <?php echo Form::checkbox('is_promotion', 1, Input::post('is_promotion', isset($item) ? $item->is_promotion : '')); ?> Акция
                </label>
            </div>
		</div>	
		<div class="control-group">
			<?php echo Form::label('Скидка (работает, если включена "Акция")', 'discount', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('discount', Input::post('discount', isset($item) ? $item->discount : ''), array('class' => 'span3', 'placeholder'=>'Скидка')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>