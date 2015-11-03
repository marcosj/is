<?php echo $this->Html->css('signup'); ?>

<div class="addresses form">
<?php echo $this->Form->create('Address'); ?>
	<fieldset>
		<legend><?php echo __('Add Address'); ?></legend>
		<?php
			echo $this->Form->input(
				'zipcode',
				array(
					'autofocus' => 'autofocus',
					'placeholder' => 'XXX-XXXX'
				)
			);
			echo $this->Form->input(
				'country',
				array(
					'placeholder' => 'Name of your country'
				)
			);
			echo $this->Form->input(
				'state',
				array(
					'placeholder' => 'Name of your state'
				)
			);
			echo $this->Form->input(
				'type',
				array(
					'placeholder' => 'What do you use this address for?'
				)
			);
			echo $this->Form->input(
				'full_address',
				array(
					'rows' => '3',
					'placeholder' => 'Street, city, country'
				)
			);
			echo $this->Form->input('user_id', array('type' => 'hidden'));
			echo $this->Form->submit(__('Add', true), array('name' => 'ok', 'div' => false));
			echo $this->Form->submit(__('Cancel', true), array('name' => 'cancel', 'formnovalidate' => true, 'div' => false));
			echo $this->Form->end();
		?>
	</fieldset>
</div>
