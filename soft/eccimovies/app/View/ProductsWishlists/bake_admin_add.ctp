<div class="productsWishlists form">
<?php echo $this->Form->create('ProductsWishlist'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Products Wishlist'); ?></legend>
	<?php
		echo $this->Form->input('wishlist_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('product_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('action' => 'index')); ?></li>
	</ul>
</div>
