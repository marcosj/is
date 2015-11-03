<div class="paymentMethods view">
<h2><?php echo __('Payment Method'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paymentMethod['User']['username'], array('controller' => 'users', 'action' => 'view', $paymentMethod['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issuer'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['issuer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['account']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Card'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['name_Card']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['expiration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security Code'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['security_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enable'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['enable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Method'), array('action' => 'edit', $paymentMethod['PaymentMethod']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Method'), array('action' => 'delete', $paymentMethod['PaymentMethod']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $paymentMethod['PaymentMethod']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($paymentMethod['Invoice'])): ?>
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
	<?php foreach ($paymentMethod['Invoice'] as $invoice): ?>
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
