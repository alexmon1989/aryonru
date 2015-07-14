<h2>Список оплаченных <span class='muted'>Заказов (всего: <?php echo count($orders); ?>)</span></h2>
<br>    

<?php if ($orders): ?>
<table class="table table-striped">
	<thead>
            <th>
                ID заказа
                <?php echo Html::anchor('admin/orders/index?order_by=id&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/orders/index?order_by=id&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th>
                ФИО
                <?php echo Html::anchor('admin/orders/index?order_by=username&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/orders/index?order_by=username&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th>
                Телефон
                <?php echo Html::anchor('admin/orders/index?order_by=telephone&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/orders/index?order_by=telephone&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th>
                E-Mail
                <?php echo Html::anchor('admin/orders/index?order_by=email&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/orders/index?order_by=email&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th>
                Стоимость
                <?php echo Html::anchor('admin/orders/index?order_by=price&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/orders/index?order_by=price&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th>
                Выдано
                <?php echo Html::anchor('admin/orders/index?order_by=issued&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/orders/index?order_by=issued&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th>
                Дата оплаты
                <?php echo Html::anchor('admin/orders/index?order_by=pay_date&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/orders/index?order_by=pay_date&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th>Действия</th>
	</thead>
	<tbody>
            <?php foreach ($orders as $order): ?>
            <tr class="<?php echo $order->issued == 1 ? 'success' : 'warning'; ?>">
                <td><?php echo $order->id; ?></td>
                <td><?php echo $order->username; ?></td>
                <td><?php echo $order->telephone; ?></td>
                <td><?php echo $order->email; ?></td>
                <td><?php echo $order->price; ?></td>
                <td><?php echo $order->issued == 1 ? 'Да' : 'Нет'; ?></td>
                <td><?php echo $order->pay_date ? Date::forge($order->pay_date)->format("%d.%m.%Y %H:%M") : 'Неизвестно'; ?></td>
                <td>
                    <?php echo Html::anchor('admin/orders/edit/'.$order->id, '<i class="icon-wrench" title="Редактировать"></i>'); ?> |
                    <?php echo Html::anchor('admin/orders/delete/'.$order->id, '<i class="icon-trash" title="Удалить"></i>', array('onclick' => "return confirm('Вы уверены?')")); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table>
    <center><?php echo $pagination; ?></center>
<?php else: ?>
<p>Заказы отсутствуют.</p>

<?php endif; ?>