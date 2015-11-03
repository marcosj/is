<div class="historicInvoices form">
<?php echo $this->Form->create('HistoricInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Historic Invoice'); ?></legend>
	<?php
		echo $this->Form->input('shippping_price');
		echo $this->Form->input('tax');
		echo $this->Form->input('total');
		echo $this->Form->input('payment_method_account');
		echo $this->Form->input('address_country');
		echo $this->Form->input('address_state');
		echo $this->Form->input('address_zipcode');
		echo $this->Form->input('address_full_address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Historic Invoices'), array('action' => 'index')); ?></li>
	</ul>
</div>
