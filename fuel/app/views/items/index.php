<h2>Listing <span class='muted'>Items</span></h2>
<br>
<?php if ($items): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Category id</th>
			<th>Price</th>
			<th>Photo name</th>
			<th>Is promotion</th>
			<th>Discount</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items as $item): ?>		<tr>

			<td><?php echo $item->category_id; ?></td>
			<td><?php echo $item->price; ?></td>
			<td><?php echo $item->photo_name; ?></td>
			<td><?php echo $item->is_promotion; ?></td>
			<td><?php echo $item->discount; ?></td>
			<td>
				<?php echo Html::anchor('items/view/'.$item->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('items/edit/'.$item->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('items/delete/'.$item->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Items.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('items/create', 'Add new Item', array('class' => 'btn btn-success')); ?>

</p>
