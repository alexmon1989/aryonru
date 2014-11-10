<h2>Editing <span class='muted'>Items_category</span></h2>
<br>

<?php echo render('items\categories/_form'); ?>
<p>
	<?php echo Html::anchor('items/categories/view/'.$items_category->id, 'View'); ?> |
	<?php echo Html::anchor('items/categories', 'Back'); ?></p>
