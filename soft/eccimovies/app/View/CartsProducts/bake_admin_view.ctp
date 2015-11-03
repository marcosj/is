<div class="cartsProducts view">
<h2><?php echo __('Carts Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cartsProduct['CartsProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cart Id'); ?></dt>
		<dd>
			<?php echo h($cartsProduct['CartsProduct']['cart_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
			<?php echo h($cartsProduct['CartsProduct']['product_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($cartsProduct['CartsProduct']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carts Product'), array('action' => 'edit', $cartsProduct['CartsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carts Product'), array('action' => 'delete', $cartsProduct['CartsProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cartsProduct['CartsProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carts Product'), array('action' => 'add')); ?> </li>
	</ul>
</div>
