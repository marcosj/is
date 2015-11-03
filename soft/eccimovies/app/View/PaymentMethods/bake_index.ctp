<div class="paymentMethods index">
	<h2><?php echo __('Payment Methods'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('issuer'); ?></th>
			<th><?php echo $this->Paginator->sort('account'); ?></th>
			<th><?php echo $this->Paginator->sort('name_Card'); ?></th>
			<th><?php echo $this->Paginator->sort('expiration'); ?></th>
			<th><?php echo $this->Paginator->sort('security_code'); ?></th>
			<th><?php echo $this->Paginator->sort('enable'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paymentMethods as $paymentMethod): ?>
	<tr>
		<td><?php echo h($paymentMethod['PaymentMethod']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($paymentMethod['User']['username'], array('controller' => 'users', 'action' => 'view', $paymentMethod['User']['id'])); ?>
		</td>
		<td><?php echo h($paymentMethod['PaymentMethod']['issuer']); ?>&nbsp;</td>
		<td><?php echo h($paymentMethod['PaymentMethod']['account']); ?>&nbsp;</td>
		<td><?php echo h($paymentMethod['PaymentMethod']['name_Card']); ?>&nbsp;</td>
		<td><?php echo h($paymentMethod['PaymentMethod']['expiration']); ?>&nbsp;</td>
		<td><?php echo h($paymentMethod['PaymentMethod']['security_code']); ?>&nbsp;</td>
		<td><?php echo h($paymentMethod['PaymentMethod']['enable']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paymentMethod['PaymentMethod']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paymentMethod['PaymentMethod']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paymentMethod['PaymentMethod']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $paymentMethod['PaymentMethod']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Payment Method'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
