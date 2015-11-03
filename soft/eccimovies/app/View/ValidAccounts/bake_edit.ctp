<div class="validAccounts form">
<?php echo $this->Form->create('ValidAccount'); ?>
	<fieldset>
		<legend><?php echo __('Edit Valid Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('issuer');
		echo $this->Form->input('account');
		echo $this->Form->input('name_Card');
		echo $this->Form->input('expiration');
		echo $this->Form->input('security_code');
		echo $this->Form->input('funds');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ValidAccount.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ValidAccount.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Valid Accounts'), array('action' => 'index')); ?></li>
	</ul>
</div>
