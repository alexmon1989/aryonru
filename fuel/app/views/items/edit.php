<h2>Editing <span class='muted'>Item</span></h2>
<br>

<?php echo render('items/_form'); ?>
<p>
	<?php echo Html::anchor('items/view/'.$item->id, 'View'); ?> |
	<?php echo Html::anchor('items', 'Back'); ?></p>
