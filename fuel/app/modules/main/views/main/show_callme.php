<h4><?php echo Lang::get('callme.coordinats'); ?></h4>

    <div class="f-message f-message-error" style="display: none" id="div-errors">
        <?php echo Lang::get('callme.error'); ?>
    </div><!--f-message -->
    
    <div class="f-message f-message-success" style="display: none" id="div-success">
        <?php echo Lang::get('callme.success'); ?>
    </div><!--f-message -->

<?php echo Form::open(array('action' => Uri::create($language.'/main/show_callme'), 'class' => 'f-horizontal', 'id' => 'show_callme_form')); ?>

    <div class="f-row">
        <label><?php echo Lang::get('callme.username'); ?>:</label>
        <div class="f-input">
            <input type="text" class="g-5" id="username" name="username">
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('callme.telephone'); ?>:</label>
        <div class="f-input">
            <input type="text" class="g-5" id="telephone" name="telephone">
        </div><!-- f-input -->
    </div><!-- f-row -->
    
    <div class="f-row">
        <label><?php echo Lang::get('callme.message'); ?>:</label>
        <div class="f-input">
            <textarea class="g-5" rows="4" id="message" name="message"></textarea>
        </div><!-- f-input -->
    </div><!-- f-row -->

    <button class="f-bu f-bu-default" onclick="add_callme(); return false;"><?php echo Lang::get('callme.send'); ?></button>
    
    <div id="preload" style="margin-top: -32px; margin-left: 90px; display: none">
        <?php echo Asset::img('preload.gif'); ?> <div style="margin-top: -30px; margin-left: 50px"><i><?php echo Lang::get('callme.loading'); ?></i></div>
    </div>
<?php echo Form::close(); ?>