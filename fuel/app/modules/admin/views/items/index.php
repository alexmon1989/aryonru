<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "list" ); ?>'><?php echo Html::anchor('admin/items/index', 'Список товаров');?></li>
	<li class='<?php echo Arr::get($subnav, "categories" ); ?>'><?php echo Html::anchor('admin/items/categories', 'Категории товаров');?></li>
</ul>

<h2>Список <span class='muted'>Товаров (всего: <?php echo $items_count; ?>)</span></h2>
<br>

    <?php echo Form::open(array('action' => Uri::create('admin/items/index'), 'class' => 'form-search')); ?>
        <?php echo Form::input('search', \Session::get('admin_items_search', ''), array('class' => 'input-medium search-query', 'placeholder' => 'Поиск (по названию)')); ?>
        <?php echo Form::submit('submit', 'Поиск', array('class' => 'btn')); ?>
    <?php echo Form::close(); ?>

<?php if ($items): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
            <th>Название (рус.) 
                <?php echo Html::anchor('admin/items/index?order_by=items_i18n.title&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/items/index?order_by=items_i18n.title&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
			<th>Категория 
                <?php echo Html::anchor('admin/items/index?order_by=item_category.title_ru&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/items/index?order_by=item_category.title_ru&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
			<th>Цена, руб. 
                <?php echo Html::anchor('admin/items/index?order_by=price&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/items/index?order_by=price&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
            <th style="text-align: center">Акционный товар 
                <?php echo Html::anchor('admin/items/index?order_by=is_promotion&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/items/index?order_by=is_promotion&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
			<th style="text-align: center">Наличие (видимость) 
                <?php echo Html::anchor('admin/items/index?order_by=visible&order_method=asc', '<i class="icon-arrow-up"></i>', array('title' => 'Сортировать по возростанию')) ?>
                <?php echo Html::anchor('admin/items/index?order_by=visible&order_method=desc', '<i class="icon-arrow-down"></i>', array('title' => 'Сортировать по убыванию')) ?>
            </th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>

<?php $i = 1; ?>
<?php foreach ($items as $item): ?>		<tr>

			<td><?php echo ($page-1)*15 + $i; ?></td>
			<td><?php echo current($item->items_i18n)->title; ?></td>
			<td><?php echo (is_null($item->item_category)) ? '' : $item->item_category->title_ru; ?></td>
			<td><?php echo $item->price; ?></td>
			<td style="text-align: center"><?php echo ($item->is_promotion == 1) ? 'Да' : 'Нет'; ?></td>
			<td style="text-align: center">
                <?php echo ($item->visible == 1) 
                ? Html::anchor('admin/items/change_visible/'.$item->id.'/0', Asset::img('lamp_enable.png'), array('title' => 'Нажмите, чтобы сделать невидимым')) 
                : Html::anchor('admin/items/change_visible/'.$item->id.'/1', Asset::img('lamp_disable.png'), array('title' => 'Нажмите, чтобы сделать видимым')); ?>
            </td>
			<td>
				<?php echo Html::anchor('admin/items/edit/'.$item->id, '<i class="icon-wrench" title="Редактировать"></i>'); ?> |
				<?php echo Html::anchor('admin/items/delete/'.$item->id, '<i class="icon-trash" title="Удалить"></i>', array('onclick' => "return confirm('Вы уверены?')")); ?>

			</td>
		</tr>
<?php $i++; ?>
<?php endforeach; ?>	</tbody>
</table>
    <center><?php echo $pagination; ?></center>
<?php else: ?>
<p>Товары отсутствуют.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/items/create', 'Добавить новый товар', array('class' => 'btn btn-success')); ?>

</p>
