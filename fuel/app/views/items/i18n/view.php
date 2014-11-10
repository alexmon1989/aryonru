<h2>Viewing <span class='muted'>#<?php echo $items_i18n->id; ?></span></h2>

<p>
	<strong>Item id:</strong>
	<?php echo $items_i18n->item_id; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $items_i18n->title; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $items_i18n->description; ?></p>

<?php echo Html::anchor('items/i18n/edit/'.$items_i18n->id, 'Edit'); ?> |
<?php echo Html::anchor('items/i18n', 'Back'); ?>