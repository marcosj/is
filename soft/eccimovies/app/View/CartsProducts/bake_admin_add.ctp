<div class="cartsProducts form">
<?php echo $this->Form->create('CartsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Carts Product'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Carts Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
