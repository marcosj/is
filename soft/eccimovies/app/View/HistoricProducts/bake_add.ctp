<div class="historicProducts form">
<?php echo $this->Form->create('HistoricProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Historic Product'); ?></legend>
	<?php
		echo $this->Form->input('historic_invoices_id');
		echo $this->Form->input('product_quantity');
		echo $this->Form->input('product_price');
		echo $this->Form->input('product_name');
		echo $this->Form->input('product_format');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Historic Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historic Invoices'), array('controller' => 'historic_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historic Invoices'), array('controller' => 'historic_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
