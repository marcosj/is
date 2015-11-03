<div class="historicInvoices view">
<h2><?php echo __('Historic Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shippping Price'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['shippping_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method Account'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['payment_method_account']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Country'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['address_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address State'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['address_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Zipcode'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['address_zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Full Address'); ?></dt>
		<dd>
			<?php echo h($historicInvoice['HistoricInvoice']['address_full_address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Historic Invoice'), array('action' => 'edit', $historicInvoice['HistoricInvoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Historic Invoice'), array('action' => 'delete', $historicInvoice['HistoricInvoice']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $historicInvoice['HistoricInvoice']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Historic Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historic Invoice'), array('action' => 'add')); ?> </li>
	</ul>
</div>
