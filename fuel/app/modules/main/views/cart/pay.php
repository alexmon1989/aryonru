<div class="g-row">
    <div class="g-12">	
        <ul class="f-breadcrumbs">
            <li><?php echo Html::anchor(Uri::create($language.'/main'), Lang::get('top-menu.main')); ?></li>
            <li><?php echo Html::anchor(Uri::create($language.'/cart'), Lang::get('store.cart')); ?></li>
            <li class="cur"><?php echo Html::anchor(Uri::create($language.'/cart/pay'), Lang::get('store.pay')); ?></li>
        </ul><!-- f-breadcrumb -->
        <hr>

        <h2><?php echo Lang::get('store.step2'); ?></h2>

        <h3><?php echo Lang::get('store.payment'); ?></h3>

        <h4><?php echo Lang::get('store.check_data'); ?>:</h4>

        <p><?php echo Lang::get('store.username'); ?>: <strong><?php echo $order->username; ?></strong></p>
        <p><?php echo Lang::get('store.telephone'); ?>: <strong><?php echo $order->telephone; ?></strong></p>
        <p><?php echo Lang::get('store.email'); ?>: <strong><?php echo $order->email; ?></strong></p>
        <p><?php echo Lang::get('store.address'); ?>: <strong><?php echo $order->address; ?></strong></p>
        <?php if (trim($order->user_comments) != ''): ?>
        <p><?php echo Lang::get('store.comments'); ?>: <strong><?php echo $order->user_comments; ?></strong></p>
        <?php endif; ?>
        
        <?php //var_dump($order) ?>
        
        <table class="table-cart-items-pay">
            <caption><?php echo Lang::get('store.items'); ?></caption>
            <thead>
                <tr>
                    <th><?php echo Lang::get('store.title'); ?></th>
                    <th><?php echo Lang::get('store.picture'); ?></th>
                    <th><?php echo Lang::get('store.price_pay'); ?></th>
                    <th><?php echo Lang::get('store.count'); ?></th>
                </tr>
            </thead>

            <tbody>
                    <?php foreach ($order->orders_items as $item): ?>
                    <tr>
                        <td><?php echo current($item->item_parent->items_i18n)->title; ?></td>
                        <td><?php echo !is_null($item->item_parent->photo_name) ? Asset::img('items/'.$item->item_parent->photo_name, array('height' => 120)) : '<img src="http://dummyimage.com/150x120/c0c0c0&text='. Lang::get('store.noimage') . '" />'; ?></td>
                        <td><?php echo $item->item_parent->price; ?></td>
                        <td><?php echo $item->count; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th><?php echo Lang::get('store.total_price_pay'); ?></th>
                    <th><?php echo Cart::total_price(); ?></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php echo Form::open(array('action' => 'http://test.robokassa.ru/Index.aspx', 'method' => 'POST')) ?>    
            <?php echo Form::hidden('MrchLogin', $mrh_login) ?>
            <?php echo Form::hidden('OutSum', $out_summ) ?>
            <?php echo Form::hidden('InvId', $inv_id) ?>
            <?php echo Form::hidden('Desc', $inv_desc) ?>
            <?php echo Form::hidden('SignatureValue', $crc) ?>
            
            <?php echo Html::anchor($language.'/cart', Lang::get('store.wrong_data'), array('class' => 'f-bu f-bu-warning')); ?>
            <?php echo Form::submit('submit', Lang::get('store.correct_data'), array('class' => 'f-bu f-bu-default')); ?>
        <?php echo Form::close(); ?>    
    </div>
</div>
