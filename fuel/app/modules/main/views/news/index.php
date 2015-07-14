<?php foreach($articles as $value): ?>
    <h2><?php echo Html::anchor($language . '/news/show/' . $value->article_id, $value->title) ?></h2>
    <div class="read-more"><p><i><?php echo Lang::get('articles.created'); ?>: <?php echo Date::forge($value->created_at)->format("%d.%m.%Y"); ?></i></p></div>
    <?php echo Str::truncate($value->full_text, 700, '...', TRUE); ?>
    <div class="read-more"><p><?php echo Html::anchor($language . '/news/show/' . $value->article_id, Lang::get('others.readmore')) ?></p></div>
<?php endforeach; ?>

<?php echo $pagination; ?>