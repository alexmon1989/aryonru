<div class="slider-wrapper theme-light">
    <div id="slider" class="nivoSlider">
        <?php foreach ($slider as $slide): ?>
            <?php echo Html::anchor(Uri::create($slide->uri), Asset::img('slider/' . $slide->img_path)); ?>
        <?php endforeach; ?>
    </div>
</div>

<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({pauseOnHover:false});
    });
</script>