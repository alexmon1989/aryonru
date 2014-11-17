<?php echo Form::open(array("class"=>"form-horizontal", 'enctype' => 'multipart/form-data')); ?>

	<fieldset>                 
            <div class="control-group">
                <?php echo Form::label('ФИО клиента', 'username', array('class'=>'control-label')); ?>
    		<div class="controls">
                    <?php echo Form::input('username', Input::post('username', isset($order) ? $order->username : ''), array('class' => 'span3', 'required' => 'required')); ?>
		</div>
            </div>
            
            <div class="control-group">
                <?php echo Form::label('Телефон', 'telephone', array('class'=>'control-label')); ?>
    		<div class="controls">
                    <?php echo Form::input('telephone', Input::post('telephone', isset($order) ? $order->telephone : ''), array('class' => 'span3', 'required' => 'required')); ?>
		</div>
            </div>
            
            <div class="control-group">
                <?php echo Form::label('E-Mail', 'email', array('class'=>'control-label')); ?>
    		<div class="controls">
                    <?php echo Form::input('email', Input::post('email', isset($order) ? $order->email : ''), array('class' => 'span3', 'required' => 'required')); ?>
		</div>
            </div>
            
            <div class="control-group">
                <?php echo Form::label('Адрес', 'address', array('class'=>'control-label')); ?>
    		<div class="controls">
                    <?php echo Form::input('address', Input::post('address', isset($order) ? $order->address : ''), array('class' => 'span6', 'required' => 'required')); ?>
		</div>
            </div>
            
            <div class="control-group">
                <?php echo Form::label('Комментарии клиента', 'user_comments', array('class'=>'control-label')); ?>
    		<div class="controls">
                    <?php echo Form::textarea('user_comments', Input::post('user_comments', isset($order) ? $order->user_comments : ''), array('class' => 'span6')); ?>
		</div>
            </div>
            
            <div class="control-group">
                <?php echo Form::label('Комментарии оператора', 'operator_comments', array('class'=>'control-label')); ?>
    		<div class="controls">
                    <?php echo Form::textarea('operator_comments', Input::post('operator_comments', isset($order) ? $order->operator_comments : ''), array('class' => 'span6')); ?>
		</div>
            </div>
		
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo Form::checkbox('issued', 1, Input::post('visible', isset($order) ? $order->issued : '')); ?> Выдано
                    </label>
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