<div class="g-row">
    <ul class="f-breadcrumbs">
        <li><?php echo Html::anchor(Uri::create($language.'/main'), Lang::get('top-menu.main')); ?></li>
        <li><?php echo Html::anchor(Uri::create($language.'/cart'), Lang::get('store.cart')); ?></li>
        <li class="cur"><?php echo Html::anchor(Uri::create($language.'/cart/pay'), Lang::get('store.pay')); ?></li>
    </ul><!-- f-breadcrumb -->
    <hr>
    
    <h3><?php echo Lang::get('store.payment'); ?></h3>
    
    <form action='http://test.robokassa.ru/Index.aspx' method=POST>
        <input type=hidden name=MrchLogin value="<?php echo $mrh_login; ?>">
        <input type=hidden name=OutSum value="<?php echo $out_summ; ?>">
        <input type=hidden name=InvId value="<?php echo $inv_id; ?>">
        <input type=hidden name=Desc value="<?php echo $inv_desc; ?>">
        <input type=hidden name=SignatureValue value="<?php echo $crc; ?>">
        <input class="f-bu f-bu-default" type=submit value='Оплатить'>
    </form>
</div>
