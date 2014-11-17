<h2>Редактирование заказа <span class='muted'>"<?php echo $order->id ?>"</span></h2>
<br>

<h4>Список товаров и стоимость</h4>
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Название</th>
                <th>Изображение</th>
                <th>Цена, руб.</th>
                <th>Количество</th>
            </tr>
        </thead>

        <tbody>
                <?php foreach ($order->orders_items as $item): ?>
                <tr>
                    <td><?php echo current($item->item_parent->items_i18n)->title; ?></td>
                    <td><?php echo !is_null($item->item_parent->photo_name) ? Asset::img('items/'.$item->item_parent->photo_name, array('style' => 'height: 120px')) : '<img src="http://dummyimage.com/150x120/c0c0c0&text='. Lang::get('store.noimage') . '" />'; ?></td>
                    <td><?php echo $item->item_parent->price; ?></td>
                    <td><?php echo $item->count; ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>Всего</th>
                <th><?php echo $order->price; ?></th>
                <th></th>
            </tr>
        </tfoot>
</table>

<h4>Данные клиента</h4>

<?php echo render('orders/_form'); ?>
<p>
	<?php echo Html::anchor('admin/orders/index', 'Назад ко всем заказам'); ?></p>