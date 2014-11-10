<h2>Список <span class='muted'>Настроек</span></h2>
<br>
<?php if ($settings): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Название</th>
			<th>Значение</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($settings as $setting): ?>		<tr>

			<td><?php echo $setting->name; ?></td>
			<td><?php echo $setting->value; ?></td>
			<td>
				<?php echo Html::anchor('admin/settings/edit/'.$setting->id, '<i class="icon-wrench" title="Редактировать"></i>'); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>Настройки отсутствуют.</p>

<?php endif; ?>