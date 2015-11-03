<div class="invoicesProducts view">
<h2><?php echo __('Invoices Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Id'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['invoice_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['product_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoices Product'), array('action' => 'edit', $invoicesProduct['InvoicesProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoices Product'), array('action' => 'delete', $invoicesProduct['InvoicesProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $invoicesProduct['InvoicesProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoices Product'), array('action' => 'add')); ?> </li>
	</ul>
</div>
