<h2>Editing <span class='muted'>Callme</span></h2>
<br>

<?php echo render('callme/_form'); ?>
<p>
	<?php echo Html::anchor('admin/callme/view/'.$callme->id, 'View'); ?> |
	<?php echo Html::anchor('admin/callme', 'Back'); ?></p>
