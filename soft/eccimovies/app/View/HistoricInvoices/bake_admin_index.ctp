<div class="historicInvoices index">
	<h2><?php echo __('Historic Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('shippping_price'); ?></th>
			<th><?php echo $this->Paginator->sort('tax'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method_account'); ?></th>
			<th><?php echo $this->Paginator->sort('address_country'); ?></th>
			<th><?php echo $this->Paginator->sort('address_state'); ?></th>
			<th><?php echo $this->Paginator->sort('address_zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('address_full_address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($historicInvoices as $historicInvoice): ?>
	<tr>
		<td><?php echo h($historicInvoice['HistoricInvoice']['id']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['shippping_price']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['tax']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['total']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['payment_method_account']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['address_country']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['address_state']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['address_zipcode']); ?>&nbsp;</td>
		<td><?php echo h($historicInvoice['HistoricInvoice']['address_full_address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $historicInvoice['HistoricInvoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $historicInvoice['HistoricInvoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $historicInvoice['HistoricInvoice']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $historicInvoice['HistoricInvoice']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Historic Invoice'), array('action' => 'add')); ?></li>
	</ul>
</div>
