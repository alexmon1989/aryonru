<div class="g-row">
    <ul class="f-breadcrumbs">
        <li><?php echo Html::anchor(Uri::create($language.'/main'), Lang::get('top-menu.main')); ?></li>
        <li><?php echo Html::anchor(Uri::create($language.'/cart'), Lang::get('store.cart')); ?></li>
        <li class="cur"><?php echo Html::anchor(Uri::create($language.'/cart/pay'), Lang::get('store.enter_details')); ?></li>
    </ul><!-- f-breadcrumb -->
    <hr>
    
    <h3><?php echo Lang::get('store.enter_details'); ?></h3>
    
    <?php if (Session::get_flash('error')): ?>
        <div class="alert alert-error">
            <strong>Ошибка</strong>
            <p>
            <?php echo html_entity_decode(implode('</p><p>', e((array) Session::get_flash('error')))); ?>
            </p>
        </div>
    <?php endif; ?>
    
    <?php echo Form::open(array('action' => Uri::create($language.'/cart/enter-details'), 'id' => 'show_callme_form')); ?>

    <div class="f-row">
        <label><?php echo Lang::get('store.username'); ?> *:</label>
        <div class="f-input">
            <input type="text" class="g-5" id="username" name="username" required>
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('store.telephone'); ?> *:</label>
        <div class="f-input">
            <input type="text" class="g-5" id="telephone" name="telephone" required>
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('store.address'); ?> *:</label>
        <div class="f-input">
            <input type="text" class="g-5" id="address" name="address" required>
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('store.email'); ?> *:</label>
        <div class="f-input">
            <input type="text" class="g-5" id="email" name="email" required>
        </div><!-- f-input -->
    </div><!-- f-row -->
        
    <div class="f-row">
        <label><?php echo Lang::get('store.comments'); ?>:</label>
        <div class="f-input">
            <textarea class="g-5" id="comments" name="comments"></textarea>
        </div><!-- f-input -->
    </div><!-- f-row -->

    <div class="f-actions">
        <button type="submit" class="f-bu f-bu-default">Перейти к следующему шагу</button>
    </div><!-- f-actions -->
    
    <?php echo Form::close(); ?>
    
</div>