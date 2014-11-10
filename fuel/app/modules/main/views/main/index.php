<?php foreach($article as $value): ?>
    <?php foreach ($value->articles_i18n as $v): ?>
        <h3><?php echo $v->title; ?></h3>
        <?php echo $v->full_text ?>
    <?php endforeach; ?>    
<?php endforeach; ?>
