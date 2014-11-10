<h2>Список <span class='muted'>Новостей</span></h2>

<br>
<?php if ($news): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Название</th>
			<th>Дата создания</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>
<?php $i = 1; ?>            
<?php foreach ($news as $value): ?>		<tr>

			<td><?php echo $i; ?></td>
			<td><?php echo $value->title; ?></td>
			<td><?php echo date('d.m.Y H:i:s', $value->created_at); ?></td>
			<td>
				<?php echo Html::anchor('admin/news/edit/'.$value->article_id . '/ru', '<i class="icon-wrench" title="Редактировать"></i>'); ?> |
				<?php echo Html::anchor('admin/news/delete/'.$value->article_id, '<i class="icon-trash" title="Удалить"></i>', array('onclick' => "return confirm('Вы уверены?')")); ?>
                        </td>
		</tr>
<?php $i++; ?>                 
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>Нет данных.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/news/create', 'Добавить', array('class' => 'btn btn-success')); ?>
</p>
