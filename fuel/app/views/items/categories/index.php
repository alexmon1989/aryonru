<h2>Listing <span class='muted'>Items_categories</span></h2>
<br>
<?php if ($items_categories): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items_categories as $items_category): ?>		<tr>

			<td><?php echo $items_category->title; ?></td>
			<td>
				<?php echo Html::anchor('items/categories/view/'.$items_category->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('items/categories/edit/'.$items_category->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('items/categories/delete/'.$items_category->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Items_categories.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('items/categories/create', 'Add new Items category', array('class' => 'btn btn-success')); ?>

</p>
