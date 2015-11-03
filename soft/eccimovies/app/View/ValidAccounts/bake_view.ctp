<div class="validAccounts view">
<h2><?php echo __('Valid Account'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($validAccount['ValidAccount']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issuer'); ?></dt>
		<dd>
			<?php echo h($validAccount['ValidAccount']['issuer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo h($validAccount['ValidAccount']['account']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Card'); ?></dt>
		<dd>
			<?php echo h($validAccount['ValidAccount']['name_Card']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration'); ?></dt>
		<dd>
			<?php echo h($validAccount['ValidAccount']['expiration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security Code'); ?></dt>
		<dd>
			<?php echo h($validAccount['ValidAccount']['security_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funds'); ?></dt>
		<dd>
			<?php echo h($validAccount['ValidAccount']['funds']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Valid Account'), array('action' => 'edit', $validAccount['ValidAccount']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Valid Account'), array('action' => 'delete', $validAccount['ValidAccount']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $validAccount['ValidAccount']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Valid Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valid Account'), array('action' => 'add')); ?> </li>
	</ul>
</div>
