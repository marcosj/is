<?php echo $this->Html->css('signup'); ?>

<div class="addresses view">
<h2><?php echo __('Address'); ?></h2>
	<table>
	<tr>
		<td><?php echo __('Zipcode'); ?></td>
		<td>
			<?php echo h($address['Address']['zipcode']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Country'); ?></td>
		<td>
			<?php echo h($address['Address']['country']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('State'); ?></td>
		<td>
			<?php echo h($address['Address']['state']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Full Address'); ?></td>
		<td>
			<?php echo h($address['Address']['full_address']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Type'); ?></td>
		<td>
			<?php echo h($address['Address']['type']); ?>
			&nbsp;
		</td>
	</tr>
	</table>
	<?php echo $this->Html->link('Back', array('action' => 'index', $address['Address']['user_id'])); ?>
</div>
