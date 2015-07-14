<?php foreach ($article->articles_i18n as $value): ?>
    <h3><?php echo $value->title; ?></h3>
    <div class="read-more"><p><i><?php echo Lang::get('articles.created'); ?>: <?php echo Date::forge($value->created_at)->format("%d.%m.%Y"); ?></i></p></div>
    <?php echo $value->full_text ?>
    <br>
    <strong><?php echo Html::anchor($language . '/news', 'Все новости') ?></strong>
<?php endforeach; ?>    