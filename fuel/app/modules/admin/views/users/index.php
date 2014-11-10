<h2>Список пользователей <span class='muted'>(всего: <?php echo $total_items; ?>)</span></h2>
<br>
<?php if ($results): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Логин</th>
			<th>Последний визит</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>
        <?php $i = 1; ?>
        <?php foreach ($results as $result): ?>		
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $result->username; ?></td>
                <td><?php echo $result->last_login != 0 ? date('d.m.Y в H:i:s', $result->last_login) : 'Никогда'; ?></td>
                <td>
                    <?php echo Html::anchor('admin/users/edit/'.$result->id, '<i class="icon-wrench" title="Редактировать"></i>'); ?> |
                    <?php echo Html::anchor('admin/users/delete/'.$result->id, '<i class="icon-trash" title="Удалить"></i>', array('onclick' => "return confirm('Вы уверены?')")); ?>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>	
    </tbody>
</table>

<?php else: ?>
    <p>Пользователи отсутствуют.</p>
<?php endif; ?>

<p>
    <br>
	<?php echo Html::anchor('admin/users/register', 'Добавить нового', array('class' => 'btn btn-success')); ?>
</p>
