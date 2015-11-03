<div class="actorsProducts form">
<?php echo $this->Form->create('ActorsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Actors Product'); ?></legend>
	<?php
		echo $this->Form->input('actor_id');
		echo $this->Form->input('product_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Actors Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
