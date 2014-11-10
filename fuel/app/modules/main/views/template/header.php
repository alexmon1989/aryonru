<div class="g">
    <div class="g-row">
        <div class="g-4 lang-choose">
            <div class="<?php echo ($language == 'ru') ? ' lang-active' : ''; ?>"><a href="<?php echo Url_lang::create('ru'); ?>">Рус</a></div>
            <div class="<?php echo ($language == 'os') ? ' lang-active' : ''; ?>"><a href="<?php echo Url_lang::create('os'); ?>">Ирон</a></div>
            <div class="<?php echo ($language == 'en') ? ' lang-active' : ''; ?>"><a href="<?php echo Url_lang::create('en'); ?>">Eng</a></div>
        </div><!-- g-4 -->
        <div class="g-6 header-contacts">
            <div class="header-phone"><b><?php echo Config::get('telephone'); ?></b></div>
            <div class="header-callme"><a href="#" onclick="show_callme(); return false;"><?php echo Lang::get('others.callme'); ?></a></div>
            <!--<div class="header-mail"><a href="mailto:sales@sales.ru">sales@sales.ru</a></div>-->
        </div><!-- g-6 -->
        <div class="g-2 login">     
            <a href="mailto:<?php echo Config::get('email'); ?>"><?php echo Config::get('email'); ?></a>
            <!--<a href="#"><?php echo Lang::get('auth.enter'); ?></a>-->                        
        </div><!-- g-2 -->
    </div><!-- g-row -->
</div><!-- g -->

<!-- TOP MENU -->
<div class="div-top-menu">
    <div class="g">
        <div class="g-row">
            <div class="g-1 logo">
                <p style="font-size: 25px; font-weight: bold">Aryon</p>
            </div>
            <div class="g-8">
                <ul class="ul-top-menu">
                    <li><a href="<?php echo Uri::create($language . '/main'); ?>" class="<?php echo (is_null($page) or $page == 'main') ? 'active' : ''; ?>"><?php echo Lang::get('top-menu.main'); ?></a></li>
                    <li><a href="<?php echo Uri::create($language . '/about'); ?>" class="<?php echo ($page == 'about') ? 'active' : ''; ?>"><?php echo Lang::get('top-menu.about'); ?></a></li>
                    <li><a href="<?php echo Uri::create($language . '/news'); ?>" class="<?php echo ($page == 'news') ? 'active' : ''; ?>"><?php echo Lang::get('top-menu.news'); ?></a></li>
                    <li><a href="<?php echo Uri::create($language . '/catalog'); ?>" class="<?php echo ($page == 'catalog') ? 'active' : ''; ?>"><?php echo Lang::get('top-menu.catalog'); ?></a></li>
                    <li><a href="<?php echo Uri::create($language . '/contacts'); ?>" class="<?php echo ($page == 'contacts') ? 'active' : ''; ?>"><?php echo Lang::get('top-menu.contacts'); ?></a></li>
                </ul>
            </div>
            <div class="g-3 cart-search">
                <?php ($language != 'en') ? $total_price = sprintf('%d', Cart::total_price()) : $total_price = sprintf('%01.2f', Cart::total_price() / Config::get('exchange_rate')); ?>
                <p><?php echo Html::anchor($language.'/cart', Asset::img('cart-mini2.png') . '<b> <span id="total_price">'. $total_price . ' </span> ' . Lang::get('store.money') . ' ('.Lang::get('store.items_in_cart') . ': <span id="total_count">' . Cart::total_qty() . '</span>)'); ?></b></p>
                <p><input type="text" value="<?php echo Input::get('search'); ?>" placeholder="<?php echo Lang::get('others.search'); ?>" id="input-search" onkeypress="if ( event.keyCode == 13 ) if ($.trim($('#input-search').val()) !== '') location.href='<?php echo Uri::create($language); ?>/catalog?search='+$('#input-search').val();"></p>
            </div>
        </div>
    </div>
</div>