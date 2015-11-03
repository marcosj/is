<div class="cartsProducts form">
<?php echo $this->Form->create('CartsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Carts Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cart_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CartsProduct.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CartsProduct.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Carts Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
