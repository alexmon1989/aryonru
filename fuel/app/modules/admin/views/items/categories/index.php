<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "list" ); ?>'><?php echo Html::anchor('admin/items/index', 'Список товаров');?></li>
	<li class='<?php echo Arr::get($subnav, "categories" ); ?>'><?php echo Html::anchor('admin/items/categories', 'Категории товаров');?></li>
</ul>

<h2>Список <span class='muted'>Категорий товаров</span></h2>
<br>
<?php if ($items_categories): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Название</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php $i = 1; ?>        
<?php foreach ($items_categories as $items_category): ?>		<tr>

			<td><?php echo $i; ?></td>
			<td><?php echo $items_category->title_ru; ?></td>
			<td>
				<?php echo Html::anchor('admin/items/categories/edit/'.$items_category->id, '<i class="icon-wrench" title="Редактировать"></i>'); ?> |
				<?php echo Html::anchor('admin/items/categories/delete/'.$items_category->id, '<i class="icon-trash" title="Удалить"></i>', array('onclick' => "return confirm('Вы уверены?')")); ?>

			</td>
		</tr>
<?php $i++; ?>        
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>Категории отсутствуют.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/items/categories/create', 'Создать категорию', array('class' => 'btn btn-success')); ?>

</p>
