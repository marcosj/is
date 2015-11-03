<?php echo $this->Html->css('signup'); ?>

<div class="addresses form">
<?php echo $this->Form->create('Address'); ?>
	<fieldset>
		<legend><?php echo __('Edit Address'); ?></legend>
	<?php
		echo $this->Form->input('zipcode', array('autofocus' => 'autofocus'));
		echo $this->Form->input('country');
		echo $this->Form->input('state');
		echo $this->Form->input('type');
		echo $this->Form->input('full_address', array('rows' => '3'));
		echo $this->Form->input('user_id', array('type' => 'hidden'));
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->submit(__('Update', true), array('name' => 'ok', 'div' => false));
		echo $this->Form->submit(__('Cancel', true), array('name' => 'cancel', 'formnovalidate' => true,'div' => false));
		echo $this->Form->end();
	?>
	</fieldset>
</div>
