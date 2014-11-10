<h2>Viewing <span class='muted'>#<?php echo $item->id; ?></span></h2>

<p>
	<strong>Category id:</strong>
	<?php echo $item->category_id; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $item->price; ?></p>
<p>
	<strong>Photo name:</strong>
	<?php echo $item->photo_name; ?></p>
<p>
	<strong>Is promotion:</strong>
	<?php echo $item->is_promotion; ?></p>
<p>
	<strong>Discount:</strong>
	<?php echo $item->discount; ?></p>

<?php echo Html::anchor('items/edit/'.$item->id, 'Edit'); ?> |
<?php echo Html::anchor('items', 'Back'); ?>