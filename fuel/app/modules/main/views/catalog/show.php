<div class="g-row">
    <ul class="f-breadcrumbs">
        <li><?php echo Html::anchor(Uri::create($language.'/main'), Lang::get('top-menu.main')); ?></li>
        <li><?php echo Html::anchor(Uri::create($language.'/catalog'), Lang::get('top-menu.catalog')); ?></li>
        <li><?php echo Html::anchor(Uri::create($language.'/catalog/index/'.$item->category_id), $item->category); ?></li>
        <li class="cur"><?php echo Html::anchor(Uri::create($language.'/catalog/show/'.$item->id), $item->title); ?></li>
    </ul><!-- f-breadcrumb -->
    <hr>
</div>

<div class="g-row">
        <div class="item-photo">
            <?php echo !is_null($item->photo_name) ? Asset::img('items/'.$item->photo_name, array('height' => '325')) : '<img src="http://dummyimage.com/500x375/c0c0c0&text='. Lang::get('store.noimage') . '" />'; ?>
            <?php echo !is_null($item->photo_name) ? '<p style="text-align: center">'.Html::anchor('assets/img/items/'.$item->photo_name, 'Смотреть в полном размере', array('rel' => 'lightbox')).'</p>' : ''; ?>
        </div>

        <div class="item-description">
            <h3><?php echo $item->title; ?></h3>
            <p><br><a href="#" class="f-bu f-bu-success to-cart" onclick="add_to_cart(<?php echo $item->id; ?>); return false;"><?php echo Lang::get('store.to_cart'); ?></a></p>
            <p><br><?php echo Lang::get('store.price'); ?>: <strong><i><?php echo $language != 'en' ? $item->price : sprintf('%01.2f', $item->price/Config::get('exchange_rate')); echo ' ' . Lang::get('store.money'); echo $item->is_promotion == 1 ? ' <font color="red">(' . mb_strtolower(Lang::get('store.promotion')) . ': ' . mb_strtolower(Lang::get('store.discount')) . ' ' . $item->discount . '%)</font>' : ''; ?></i></strong></p>
            <p><?php echo Lang::get('store.category') . ': ' . Html::anchor($language.'/catalog/index/'.$item->category_id, $item->category); ?></p>
            
            <h4><?php echo Lang::get('store.description'); ?></h4>
            <p><?php echo $item->description; ?></p>
        </div>         
</div>

<div class="g-row">
        <?php echo Html::anchor($language.'/catalog', Lang::get('top-menu.catalog')); ?>   
</div>

