<h2>Listing <span class='muted'>Items_i18ns</span></h2>
<br>
<?php if ($items_i18ns): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Item id</th>
			<th>Title</th>
			<th>Description</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items_i18ns as $items_i18n): ?>		<tr>

			<td><?php echo $items_i18n->item_id; ?></td>
			<td><?php echo $items_i18n->title; ?></td>
			<td><?php echo $items_i18n->description; ?></td>
			<td>
				<?php echo Html::anchor('items/i18n/view/'.$items_i18n->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('items/i18n/edit/'.$items_i18n->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('items/i18n/delete/'.$items_i18n->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Items_i18ns.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('items/i18n/create', 'Add new Items i18n', array('class' => 'btn btn-success')); ?>

</p>
