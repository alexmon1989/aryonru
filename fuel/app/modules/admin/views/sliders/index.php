<h2>Список <span class='muted'>слайдеров</span></h2>
<br>
<?php if ($sliders): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th width="35%">Изображение</th>
			<th width="25%">Ссылка</th>
			<th>Позиция</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($sliders as $slider): ?>		<tr>

            <td><?php echo Asset::img('slider/' . $slider->img_path, array('width' => 350)); ?></td>
            <td><?php echo Html::anchor(Uri::create($slider->uri), NULL, array('target' => '_blank', 'title' => 'Открыть в новой вкладке')); ?></td>
			<td>
                <?php echo $slider->position; ?> |
                <?php echo Html::anchor('admin/sliders/decrease_pos/'.$slider->id, '<i class="icon-arrow-up" title="Поднять"></i>'); ?> |
				<?php echo Html::anchor('admin/sliders/increase_pos/'.$slider->id, '<i class="icon-arrow-down" title="Опустить"></i>'); ?>
            </td>
			<td>
				<?php echo Html::anchor('admin/sliders/edit/'.$slider->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('admin/sliders/delete/'.$slider->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>
            </td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>Нет данных.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/sliders/create', 'Добавить', array('class' => 'btn btn-success')); ?>
</p>
