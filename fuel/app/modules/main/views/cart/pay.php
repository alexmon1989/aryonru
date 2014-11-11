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

        <h4>Еще раз проверьте данные заказа:</h4>

        <p><?php echo Lang::get('store.username'); ?>: <strong><?php echo $order->username; ?></strong></p>
        <p><?php echo Lang::get('store.telephone'); ?>: <strong><?php echo $order->telephone; ?></strong></p>
        <p><?php echo Lang::get('store.email'); ?>: <strong><?php echo $order->email; ?></strong></p>
        <p><?php echo Lang::get('store.address'); ?>: <strong><?php echo $order->address; ?></strong></p>
        <?php if (trim($order->user_comments) != ''): ?>
        <p><?php echo Lang::get('store.comments'); ?>: <strong><?php echo $order->user_comments; ?></strong></p>
        <?php endif; ?>
        
        <table class="table-cart-items-pay">
            <caption>Товары</caption>
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Изображение</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
            </thead>

            <tbody>
                    <?php foreach ($order->orders_items as $item): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>


        <form action='http://test.robokassa.ru/Index.aspx' method=POST>
            <input type=hidden name=MrchLogin value="<?php echo $mrh_login; ?>">
            <input type=hidden name=OutSum value="<?php echo $out_summ; ?>">
            <input type=hidden name=InvId value="<?php echo $inv_id; ?>">
            <input type=hidden name=Desc value="<?php echo $inv_desc; ?>">
            <input type=hidden name=SignatureValue value="<?php echo $crc; ?>">
            <?php echo Html::anchor($language.'/cart', 'Нет, неправильно, я хочу изменить данные', array('class' => 'f-bu f-bu-warning')); ?>
            <input class="f-bu f-bu-default" type=submit value='Всё верно, я хочу оплатить заказ'>
        </form>
    </div>
</div>
