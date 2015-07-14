<div class="g-row">
    <ul class="f-breadcrumbs">
        <li><?php echo Html::anchor(Uri::create($language.'/main'), Lang::get('top-menu.main')); ?></li>
        <li><?php echo Html::anchor(Uri::create($language.'/cart'), Lang::get('store.cart')); ?></li>
        <li class="cur"><?php echo Html::anchor(Uri::create($language.'/cart/pay'), Lang::get('store.enter_details')); ?></li>
    </ul><!-- f-breadcrumb -->
    <hr>
    
    <h2><?php echo Lang::get('store.step1'); ?></h2>
    
    <h3><?php echo Lang::get('store.enter_details'); ?></h3>
    
    <?php if (Session::get_flash('error')): ?>        
        <div class="f-message f-message-error">
            <span class="close"></span>
            <strong>Ошибка при заполнении!</strong>
            <p><?php echo html_entity_decode(implode('</p><p>', e((array) Session::get_flash('error')))); ?></p>
	</div>
    <?php endif; ?>
    
    <?php echo Form::open(array('action' => Uri::create($language.'/cart/enter-details'), 'id' => 'show_callme_form')); ?>

    <div class="f-row">
        <label><?php echo Lang::get('store.username'); ?> *:</label>
        <div class="f-input">
            <?php echo Form::input('username', Input::post('username', ''), array('class' => 'g-5', 'required')); ?>
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('store.telephone'); ?> *:</label>
        <div class="f-input">
            <?php echo Form::input('telephone', Input::post('telephone', ''), array('class' => 'g-5', 'required')); ?>
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('store.address'); ?> *:</label>
        <div class="f-input">
            <?php echo Form::input('address', Input::post('address', ''), array('class' => 'g-5', 'required')); ?>
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('store.email'); ?> *:</label>
        <div class="f-input">
            <?php echo Form::input('email', Input::post('email', ''), array('class' => 'g-5', 'required')); ?>
        </div><!-- f-input -->
    </div><!-- f-row -->
        
    <div class="f-row">
        <label><?php echo Lang::get('store.comments'); ?>:</label>
        <div class="f-input">
            <?php echo Fuel\Core\Form::textarea('user_comments', Input::post('user_comments', ''), array('class' => 'g-5')); ?>
        </div><!-- f-input -->
    </div><!-- f-row -->

    <div class="f-actions">
        <button type="submit" class="f-bu f-bu-default"><?php echo Lang::get('store.goto_next_step'); ?></button>
    </div><!-- f-actions -->
    
    <?php echo Form::close(); ?>
    
</div>