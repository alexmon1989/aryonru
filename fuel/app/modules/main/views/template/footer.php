<div class="g">
    <div class="g-row">                       
        <div class="g-2">
            <ul class="ul-footer-info">
                <li><?php echo Lang::get('footer-menu.info'); ?></li>                                    
                <li><a href="<?php echo URI::create($language . '/about'); ?>"><?php echo Lang::get('footer-menu.about'); ?></a></li>
                <li><a href="<?php echo URI::create($language . '/contacts'); ?>"><?php echo Lang::get('footer-menu.contacts'); ?></a></li>
            </ul>
        </div>
        <div class="g-2">
            <ul class="ul-footer-blog">
                <li><?php echo Lang::get('footer-menu.blog'); ?></li>                          
                <li><a href="<?php echo URI::create($language . '/news'); ?>"><?php echo Lang::get('footer-menu.news'); ?></a></li>
            </ul>
        </div>
        <div class="g-3">
            <ul class="ul-footer-support">
                <li><?php echo Lang::get('footer-menu.support'); ?></li>                          
                <li><a href="#"><?php echo Lang::get('footer-menu.callme'); ?></a></li>
            </ul>
			
			<!--Openstat-->
<span id="openstat2354424" style="margin-left:28px"></span>
<script type="text/javascript">
var openstat = { counter: 2354424, image: 5081, color: "c3c3c3", next: openstat };
(function(d, t, p) {
var j = d.createElement(t); j.async = true; j.type = "text/javascript";
j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
})(document, "script", document.location.protocol);
</script>
<!--/Openstat-->
        </div>                            
        <div class="g-2">
            &nbsp;
        </div>
        <div class="g-3">
            <div class="copyrights">
                <p><?php echo Lang::get('footer-menu.copyright'); ?></p>
                <p><?php echo Config::get('telephone'); ?></p>
                <p><a href="mailto:<?php echo Config::get('email'); ?>"><?php echo Config::get('email'); ?></a></p>
            </div>
        </div>
    </div>
</div>    