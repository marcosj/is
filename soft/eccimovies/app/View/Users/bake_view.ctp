<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($user['User']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enable'); ?></dt>
		<dd>
			<?php echo h($user['User']['enable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods'), array('controller' => 'payment_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method'), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('controller' => 'products_wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Wishlist'), array('controller' => 'products_wishlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Addresses'); ?></h3>
	<?php if (!empty($user['Address'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('Full Address'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Address'] as $address): ?>
		<tr>
			<td><?php echo $address['id']; ?></td>
			<td><?php echo $address['user_id']; ?></td>
			<td><?php echo $address['type']; ?></td>
			<td><?php echo $address['country']; ?></td>
			<td><?php echo $address['state']; ?></td>
			<td><?php echo $address['zipcode']; ?></td>
			<td><?php echo $address['full_address']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'addresses', 'action' => 'view', $address['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'addresses', 'action' => 'edit', $address['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'addresses', 'action' => 'delete', $address['id']), array('confirm' => __('Are you sure you want to delete # %s?', $address['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Carts'); ?></h3>
	<?php if (!empty($user['Cart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Cart'] as $cart): ?>
		<tr>
			<td><?php echo $cart['id']; ?></td>
			<td><?php echo $cart['user_id']; ?></td>
			<td><?php echo $cart['subtotal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carts', 'action' => 'view', $cart['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carts', 'action' => 'edit', $cart['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carts', 'action' => 'delete', $cart['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cart['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payment Methods'); ?></h3>
	<?php if (!empty($user['PaymentMethod'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Issuer'); ?></th>
		<th><?php echo __('Account'); ?></th>
		<th><?php echo __('Name Card'); ?></th>
		<th><?php echo __('Expiration'); ?></th>
		<th><?php echo __('Security Code'); ?></th>
		<th><?php echo __('Enable'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['PaymentMethod'] as $paymentMethod): ?>
		<tr>
			<td><?php echo $paymentMethod['id']; ?></td>
			<td><?php echo $paymentMethod['user_id']; ?></td>
			<td><?php echo $paymentMethod['issuer']; ?></td>
			<td><?php echo $paymentMethod['account']; ?></td>
			<td><?php echo $paymentMethod['name_Card']; ?></td>
			<td><?php echo $paymentMethod['expiration']; ?></td>
			<td><?php echo $paymentMethod['security_code']; ?></td>
			<td><?php echo $paymentMethod['enable']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payment_methods', 'action' => 'view', $paymentMethod['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payment_methods', 'action' => 'edit', $paymentMethod['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payment_methods', 'action' => 'delete', $paymentMethod['id']), array('confirm' => __('Are you sure you want to delete # %s?', $paymentMethod['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Method'), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products Wishlists'); ?></h3>
	<?php if (!empty($user['ProductsWishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Wishlist Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['ProductsWishlist'] as $productsWishlist): ?>
		<tr>
			<td><?php echo $productsWishlist['id']; ?></td>
			<td><?php echo $productsWishlist['wishlist_id']; ?></td>
			<td><?php echo $productsWishlist['user_id']; ?></td>
			<td><?php echo $productsWishlist['product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products_wishlists', 'action' => 'view', $productsWishlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products_wishlists', 'action' => 'edit', $productsWishlist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products_wishlists', 'action' => 'delete', $productsWishlist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productsWishlist['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Products Wishlist'), array('controller' => 'products_wishlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishlists'); ?></h3>
	<?php if (!empty($user['Wishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Wishlist'] as $wishlist): ?>
		<tr>
			<td><?php echo $wishlist['id']; ?></td>
			<td><?php echo $wishlist['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishlists', 'action' => 'view', $wishlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishlists', 'action' => 'edit', $wishlist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishlists', 'action' => 'delete', $wishlist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wishlist['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
