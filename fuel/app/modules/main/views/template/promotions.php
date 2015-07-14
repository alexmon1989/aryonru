<div class="g-row">
    <div class="g-12">
        <div class="promotions" style="display: none;">
            <h3><a href="#"><?php echo Lang::get('store.promotions'); ?></a></h3>
            <ul id="carousel-promotions" class="jcarousel-skin-tango">
                <?php foreach ($promotions as $promotion): ?>
                <li>
                    <p class="promo-item-img"><?php echo !is_null($promotion->photo_name) ? Asset::img('items/'.$promotion->photo_name, array('height' => 90)) : '<img src="http://dummyimage.com/120x90/c0c0c0&text='. Lang::get('store.noimage') . '" />'; ?></p>
                    <p class="item-link">
                        <?php foreach ($promotion->items_i18n as $item_i18n): ?>
                            <?php if ($item_i18n->item_language->value == $language): ?>
                                <?php echo Html::anchor($language.'/catalog/show/'.$promotion->id, $item_i18n->title); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach ($promotion->items_i18n as $item_i18n): ?>
                            <?php if ($item_i18n->item_language->value == $language): ?>
                                <?php echo Str::truncate($item_i18n->description, 70, '...'); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <br><br>
                    </p>
                    <div class="discount-price">
                        <p>
                            <?php echo Lang::get('store.discount'); ?>: <?php echo $promotion->discount; ?>%<br><?php echo Lang::get('store.price'); ?>: <font color="red"><?php echo $language != 'en' ? $promotion->price : sprintf('%01.2f', $promotion->price/Config::get('exchange_rate')); echo ' ' . Lang::get('store.money'); ?></font>
                        </p>    
                        <p>    
                            <a href="#" class="f-bu f-bu-success to-cart" onclick="add_to_cart(<?php echo $promotion->id; ?>); return false;"><?php echo Lang::get('store.to_cart'); ?></a>
                        </p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>  
        </div>
    </div>
</div>

<script type="text/javascript">
    $(window).load(function() {
        $('#carousel-promotions').jcarousel({scroll:5 <?php echo count($promotions) > 5 ? ', wrap: \'circular\'' : ''; ?>});
        $('.promotions').show();
    });
</script>