<div class="g-row">
    <ul class="f-breadcrumbs">
        <li><?php echo Html::anchor(Uri::create($language.'/main'), Lang::get('top-menu.main')); ?></li>
        <li><?php echo Html::anchor(Uri::create($language.'/catalog'), Lang::get('top-menu.catalog')); ?></li>
        <li class="cur"><?php echo Html::anchor(Uri::create($language.'/catalog/index/'.$category_id), $active_category); ?></li>
    </ul><!-- f-breadcrumb -->
    <hr>
</div>

<div class="g-row catalog">
    <div class="g-3">
        <div class="categories">
            <h3><?php echo Lang::get('store.categories'); ?></h3>

            <?php if (!empty($categories)): ?>
                <ul class="f-nav-list">                    
                        <li class='<?php echo Arr::get($subnav, 'all'); ?>'><?php echo Html::anchor(Uri::create($language.'/catalog/index/all'), Lang::get('store.categories_all')); ?></li>
                    <?php foreach ($categories as $category): ?>
                        <li class='<?php echo Arr::get($subnav, $category->id); ?>'>
                            <?php $title = 'title_'.$language; ?>
                            <?php echo Html::anchor(Uri::create($language.'/catalog/index/'.$category->id), $category->$title); ?>
                        </li>
                    <?php endforeach; ?>
                </ul><!-- f-nav-list -->
            <?php endif; ?>

        </div>
    </div>
    <div class="g-9">
        <div class="items">
            <h3><?php echo Lang::get('store.items'); ?></h3>
            
            <p><br><i><?php echo Lang::get('store.sorting'); ?>:</i> 
                <?php $o_m = 'asc'; if ($order_by == 'items.price' and $order_method == 'asc') $o_m = 'desc'; ?>
                <?php echo Html::anchor($language.'/catalog?order_by=items.price&order_method='.$o_m, Lang::get('store.sorting_by_price')); ?>&nbsp;
                <?php $o_m = 'asc'; if ($order_by == 'items.id' and $order_method == 'asc') $o_m = 'desc'; ?>
                <?php echo Html::anchor($language.'/catalog?order_by=items.id&order_method='.$o_m, Lang::get('store.sorting_by_novelty')); ?>&nbsp;
                <?php $o_m = 'asc'; if ($order_by == 'items_i18n.title' and $order_method == 'asc') $o_m = 'desc'; ?>
                <?php echo Html::anchor($language.'/catalog?order_by=items_i18n.title&order_method='.$o_m, Lang::get('store.sorting_by_alphabet')); ?>&nbsp;
                <?php $o_m = 'asc'; if ($order_by == 'items.is_promotion' and $order_method == 'asc') $o_m = 'desc'; ?>
                <?php echo Html::anchor($language.'/catalog?order_by=items.is_promotion&order_method='.$o_m, Lang::get('store.sorting_by_promotions')); ?><br><br></p>
            
            <?php if ($pagination != '') echo $pagination . '<br>'; ?>
            
            <div class="f-col-2">
                <div class="f-column">
                    <?php $flag = FALSE; ?>
                    <?php foreach ($items as $item): ?>
                        <?php if ($flag == FALSE): ?>
                    
                            <div class="item">
                                <div class="g-4">
                                        <div style="min-height: 45px">
                                            <h4><?php echo Html::anchor($language.'/catalog/show/'.$item->id, $item->title); ?></h4>
                                        </div>
                                        <div>
                                            <a href="#" class="f-bu f-bu-success to-cart" onclick="add_to_cart(<?php echo $item->id; ?>); return false;"><?php echo Lang::get('store.to_cart'); ?></a>
                                        </div>
                                    <div class="g-row">
                                        <p><?php echo Lang::get('store.price') . ': <strong>'; echo $language != 'en' ? $item->price : sprintf('%01.2f', $item->price/Config::get('exchange_rate')); echo ' ' . Lang::get('store.money') . '</strong>'; echo $item->is_promotion == 1 ? ' <font color="red">(' . mb_strtolower(Lang::get('store.promotion')) . ': ' . mb_strtolower(Lang::get('store.discount')) . ' ' . $item->discount . '%)</font>' : ''; ?></p>
                                        <p><?php echo Lang::get('store.category') . ': ' . Html::anchor($language.'/catalog/index/'.$item->category_id, $item->category); ?></p>
                                        <p><?php echo !is_null($item->photo_name) ? Html::anchor($language.'/catalog/show/'.$item->id, Asset::img('items/'.$item->photo_name, array('height' => '200'))) : Html::anchor($language.'/catalog/show/'.$item->id, '<img src="http://dummyimage.com/300x225/c0c0c0&text='. Lang::get('store.noimage') . '" />'); ?></p>
                                        <p><?php echo Str::truncate($item->description, 150); ?></p>
                                        <p style="text-align: right"><strong><?php echo Html::anchor($language.'/catalog/show/'.$item->id, Lang::get('store.details')); ?></strong></p>
                                    </div>
                                </div>
                            </div>
                    
                            <?php $flag = TRUE; continue; ?>
                        <?php endif; ?>
                        <?php $flag = FALSE; ?>
                    <?php endforeach; ?>
                </div><!-- f-column -->
                
                <div class="f-column">
                    <?php $flag = TRUE; ?>
                    <?php foreach ($items as $item): ?>
                        <?php if ($flag == FALSE): ?>
                    
                            <div class="item">
                                <div class="g-4">
                                        <div style="min-height: 45px">
                                            <h4><?php echo Html::anchor($language.'/catalog/show/'.$item->id, $item->title); ?></h4>
                                        </div>
                                        <div>
                                            <a href="#" class="f-bu f-bu-success to-cart" onclick="add_to_cart(<?php echo $item->id; ?>); return false;"><?php echo Lang::get('store.to_cart'); ?></a>
                                        </div>
                                    <div class="g-row">
                                        <p><?php echo Lang::get('store.price') . ': <strong>'; echo $language != 'en' ? $item->price : sprintf('%01.2f', $item->price/Config::get('exchange_rate')); echo ' ' . Lang::get('store.money') . '</strong>'; echo $item->is_promotion == 1 ? ' <font color="red">(' . mb_strtolower(Lang::get('store.promotion')) . ': ' . mb_strtolower(Lang::get('store.discount')) . ' ' . $item->discount . '%)</font>' : ''; ?></p>
                                        <p><?php echo Lang::get('store.category') . ': ' . Html::anchor($language.'/catalog/index/'.$item->category_id, $item->category); ?></p>
                                        <p><?php echo !is_null($item->photo_name) ? Html::anchor($language.'/catalog/show/'.$item->id, Asset::img('items/'.$item->photo_name, array('height' => '200'))) : Html::anchor($language.'/catalog/show/'.$item->id, '<img src="http://dummyimage.com/300x225/c0c0c0&text='. Lang::get('store.noimage') . '" />'); ?></p>
                                        <p><?php echo Str::truncate($item->description, 150); ?></p>
                                        <p style="text-align: right"><strong><?php echo Html::anchor($language.'/catalog/show/'.$item->id, Lang::get('store.details')); ?></strong></p>
                                    </div>
                                </div>
                            </div>
                    
                            <?php $flag = TRUE; continue; ?>
                        <?php endif; ?>
                        <?php $flag = FALSE; ?>
                    <?php endforeach; ?>
                </div><!-- f-column -->
            </div><!-- f-col-2 -->
            
            <?php echo $pagination; ?>
        </div>
    </div>
</div>