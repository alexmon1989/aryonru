<h2>Viewing <span class='muted'>#<?php echo $items_category->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $items_category->title; ?></p>

<?php echo Html::anchor('items/categories/edit/'.$items_category->id, 'Edit'); ?> |
<?php echo Html::anchor('items/categories', 'Back'); ?>