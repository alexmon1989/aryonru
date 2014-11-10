<div class="g-row">
        <h3><?php echo Lang::get('store.add_in_cart') ?></h3>
        <div class="item-photo">
            <?php echo !is_null($item->photo_name) ? Asset::img('items/'.$item->photo_name, array('height' => '150')) : '<img src="http://dummyimage.com/234x175/c0c0c0&text='. Lang::get('store.noimage') . '" />'; ?>
        </div>

        <div class="item-description">
            <h4><?php echo $item->title; ?></h4>
            <p><?php echo Lang::get('store.price'); ?>: <strong><i><?php echo $language != 'en' ? $item->price : sprintf('%01.2f', $item->price/Config::get('exchange_rate')); echo ' ' . Lang::get('store.money');?></i></strong></p>
            <p><?php echo Lang::get('store.category') . ': ' . Html::anchor($language.'/catalog/index/'.$item->category_id, $item->category); ?></p>
        </div> 
        
        <div style="padding-top: 200px; width: 450px;">
            <p style="text-align: center"><?php echo Html::anchor('#', Lang::get('store.continue_buying'), array('class' => 'f-bu f-bu-success', 'onclick' => 'location.reload(); return false;')); ?> <?php echo Html::anchor($language.'/cart', Lang::get('store.goto_pay'), array('class' => 'f-bu f-bu-default')); ?></p>
        </div>        
</div>