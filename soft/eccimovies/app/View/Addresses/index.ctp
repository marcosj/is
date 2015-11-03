<?php echo $this->Html->css('addresses'); ?>

<div class="addresses index">
	<h2><?php echo __('Addresses'); ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('New Address'), array('action' => 'add', $uid)); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
<!--
			<th><?php echo $this->Paginator->sort('full_address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
-->
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th class="actions"><?php echo __('Details'); ?></th>
			<th class="actions"><?php echo __('Edit'); ?></th>
			<th class="actions"><?php echo __('Delete'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($addresses as $address): ?>
	<tr>
		<td><?php echo h($address['Address']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['country']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['state']); ?>&nbsp;</td>
<!--
		<td><?php echo h($address['Address']['full_address']); ?>&nbsp;</td>
-->
		<td><?php echo h($address['Address']['type']); ?>&nbsp;</td>
		<td>
			<?php
				echo $this->Html->link(
					'<i class="glyphicon glyphicon-eye-open"></i>',
					array('action' => 'view', $address['Address']['id']),
					array('escape' => false)
				);
			?>
		</td>
		<td>
			<?php
				echo $this->Html->link(
					'<i class="glyphicon glyphicon-pencil"></i>',
					array('action' => 'edit', $address['Address']['id']),
					array('escape' => false)
				);
			?>
		</td>
		<td>
			<?php
				echo $this->Form->postLink(
					'<i class="glyphicon glyphicon-trash"></i>',
					array('action' => 'delete', $address['Address']['id']),
					array(
						'escape' => false,
						'confirm' => __('Are you sure you want to delete # %s?', $address['Address']['id'])
					)
				);
			?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
