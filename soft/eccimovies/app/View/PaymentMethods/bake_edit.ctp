<div class="paymentMethods form">
<?php echo $this->Form->create('PaymentMethod'); ?>
	<fieldset>
		<legend><?php echo __('Edit Payment Method'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('issuer');
		echo $this->Form->input('account');
		echo $this->Form->input('name_Card');
		echo $this->Form->input('expiration');
		echo $this->Form->input('security_code');
		echo $this->Form->input('enable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PaymentMethod.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('PaymentMethod.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Payment Methods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
