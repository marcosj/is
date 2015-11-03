<div class="actors view">
<h2><?php echo __('Actor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actor['Actor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Name'); ?></dt>
		<dd>
			<?php echo h($actor['Actor']['full_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actor'), array('action' => 'edit', $actor['Actor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actor'), array('action' => 'delete', $actor['Actor']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actor['Actor']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($actor['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Stock Quantity'); ?></th>
		<th><?php echo __('Format'); ?></th>
		<th><?php echo __('Languages'); ?></th>
		<th><?php echo __('Subtitles'); ?></th>
		<th><?php echo __('Release Year'); ?></th>
		<th><?php echo __('Runtime'); ?></th>
		<th><?php echo __('More Details'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th><?php echo __('Enable'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actor['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['code']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['stock_quantity']; ?></td>
			<td><?php echo $product['format']; ?></td>
			<td><?php echo $product['languages']; ?></td>
			<td><?php echo $product['subtitles']; ?></td>
			<td><?php echo $product['release_year']; ?></td>
			<td><?php echo $product['runtime']; ?></td>
			<td><?php echo $product['more_details']; ?></td>
			<td><?php echo $product['subcategory_id']; ?></td>
			<td><?php echo $product['enable']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
