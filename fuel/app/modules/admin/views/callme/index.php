<h2>Список <span class='muted'>клиентов</span></h2>
<br>
<?php if ($callmes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ФИО</th>
			<th>Телефон</th>
			<th>Сообщение</th>
			<th>Статус</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($callmes as $callme): ?>		<tr>

			<td><?php echo $callme->username; ?></td>
			<td><?php echo $callme->telephone; ?></td>
                        <td><?php echo Str::truncate($callme->message, 100); ?></td>
			<td><?php echo $callme->status == 1 ? 'Обработано' : '<font color="red">Не обработано</font>'; ?></td>
			<td>
				<?php echo Html::anchor('admin/callme/view/'.$callme->id, '<i class="icon-eye-open" title="Смотреть"></i>'); ?> |
				<?php echo Html::anchor('admin/callme/delete/'.$callme->id, '<i class="icon-trash" title="Удалить"></i>', array('onclick' => "return confirm('Вы уверены?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<center><?php echo $pagination; ?></center>

<?php else: ?>
<p>Клиенты отсутствуют.</p>

<?php endif; ?>
