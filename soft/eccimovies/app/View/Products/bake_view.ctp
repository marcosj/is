<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($product['Product']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Quantity'); ?></dt>
		<dd>
			<?php echo h($product['Product']['stock_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($product['Product']['format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Languages'); ?></dt>
		<dd>
			<?php echo h($product['Product']['languages']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtitles'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subtitles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Release Year'); ?></dt>
		<dd>
			<?php echo h($product['Product']['release_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Runtime'); ?></dt>
		<dd>
			<?php echo h($product['Product']['runtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('More Details'); ?></dt>
		<dd>
			<?php echo h($product['Product']['more_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Subcategory']['subcategory_name'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enable'); ?></dt>
		<dd>
			<?php echo h($product['Product']['enable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actors'), array('controller' => 'actors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actor'), array('controller' => 'actors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actors'); ?></h3>
	<?php if (!empty($product['Actor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Full Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Actor'] as $actor): ?>
		<tr>
			<td><?php echo $actor['id']; ?></td>
			<td><?php echo $actor['full_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actors', 'action' => 'view', $actor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actors', 'action' => 'edit', $actor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actors', 'action' => 'delete', $actor['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actor['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actor'), array('controller' => 'actors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Carts'); ?></h3>
	<?php if (!empty($product['Cart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Cart'] as $cart): ?>
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
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($product['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Shippping Price'); ?></th>
		<th><?php echo __('Tax'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Payment Method Id'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['shippping_price']; ?></td>
			<td><?php echo $invoice['tax']; ?></td>
			<td><?php echo $invoice['total']; ?></td>
			<td><?php echo $invoice['payment_method_id']; ?></td>
			<td><?php echo $invoice['address_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), array('confirm' => __('Are you sure you want to delete # %s?', $invoice['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishlists'); ?></h3>
	<?php if (!empty($product['Wishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Wishlist'] as $wishlist): ?>
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
