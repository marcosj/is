<div class="invoicesProducts form">
<?php echo $this->Form->create('InvoicesProduct'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Invoices Product'); ?></legend>
	<?php
		echo $this->Form->input('invoice_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Invoices Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
