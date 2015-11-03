<div class="productsWishlists form">
<?php echo $this->Form->create('ProductsWishlist'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Products Wishlist'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductsWishlist.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ProductsWishlist.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('action' => 'index')); ?></li>
	</ul>
</div>
