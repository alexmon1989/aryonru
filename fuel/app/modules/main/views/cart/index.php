<div class="g-row">
    <ul class="f-breadcrumbs">
        <li><?php echo Html::anchor(Uri::create($language.'/main'), Lang::get('top-menu.main')); ?></li>
        <li class="cur"><?php echo Html::anchor(Uri::create($language.'/cart'), Lang::get('store.cart')); ?></li>
    </ul><!-- f-breadcrumb -->
    <hr>
    
    <h3><?php echo Lang::get('store.cart'); ?></h3>
    
    <table>
        <caption><?php echo Lang::get('store.total_items') . ': ' . Cart::total_qty(); ?></caption>
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo Lang::get('store.picture'); ?></th>
                <th><?php echo Lang::get('store.title'); ?></th>
                <th><?php echo Lang::get('store.price'); ?></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th><?php echo Lang::get('store.total_price'); ?></th>
                <th><?php echo $language != 'en' ? Cart::total_price() : sprintf('%01.2f', Cart::total_price()/Config::get('exchange_rate')); echo ' ' . Lang::get('store.money'); ?></th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            <?php if (Cart::total_qty() > 0): ?>
                <?php $i=1; ?>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo !is_null($item->photo_name) ? Asset::img('items/'.$item->photo_name, array('height' => 120)) : '<img src="http://dummyimage.com/150x120/c0c0c0&text='. Lang::get('store.noimage') . '" />'; ?></td>
                    <td><?php echo current($item->items_i18n)->title; ?></td>
                    <td><?php echo $language != 'en' ? $item->price : sprintf('%01.2f', $item->price/Config::get('exchange_rate')); echo ' ' . Lang::get('store.money'); ?></td>
                    <td><?php echo Html::anchor($language.'/cart/remove/'.$item->id, Lang::get('store.remove'), array('class' => 'f-bu f-bu-warning')); ?></td>
                </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center"><?php echo Lang::get('store.items_missing'); ?></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
    <p style="text-align: center">
        <?php echo Html::anchor('#', Lang::get('store.recalculate_price'), array('class' => 'f-bu f-bu-success', 'onclick' => 'location.reload(); return false;')); ?>&nbsp;
        <?php echo Html::anchor($language.'/cart/enter-details/', Lang::get('store.goto_pay'), array('class' => 'f-bu f-bu-default')); ?>
    </p>
</div>
