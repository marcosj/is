<div class="productsWishlists view">
<h2><?php echo __('Products Wishlist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productsWishlist['ProductsWishlist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wishlist Id'); ?></dt>
		<dd>
			<?php echo h($productsWishlist['ProductsWishlist']['wishlist_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($productsWishlist['ProductsWishlist']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
			<?php echo h($productsWishlist['ProductsWishlist']['product_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Products Wishlist'), array('action' => 'edit', $productsWishlist['ProductsWishlist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Products Wishlist'), array('action' => 'delete', $productsWishlist['ProductsWishlist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productsWishlist['ProductsWishlist']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Wishlist'), array('action' => 'add')); ?> </li>
	</ul>
</div>
