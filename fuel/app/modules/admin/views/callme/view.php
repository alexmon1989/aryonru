<h2>Просмотр <span class='muted'>#<?php echo $callme->id; ?></span></h2>

<p>
    <br>
	<strong>ФИО:</strong>
	<?php echo $callme->username; ?></p>
<p>
	<strong>Телефон:</strong>
	<?php echo $callme->telephone; ?></p>
<p>
	<strong>Сообщение:</strong>
	<?php echo $callme->message; ?></p>
<p>
	<strong>Статус:</strong>
	<?php echo $callme->status == 1 ? 'Обработано' : '<font color="red">Не обработано</font>'; ?></p>

<p>	
    <?php echo Html::anchor('admin/callme/set_processed/'.$callme->id, 'Обработано', array('class' => 'btn btn-primary')); ?></p>

<?php echo Html::anchor('admin/callme', 'Назад'); ?>