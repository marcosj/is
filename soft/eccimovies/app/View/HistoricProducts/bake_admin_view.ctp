<div class="historicProducts view">
<h2><?php echo __('Historic Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historicProduct['HistoricProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historic Invoices'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historicProduct['HistoricInvoices']['id'], array('controller' => 'historic_invoices', 'action' => 'view', $historicProduct['HistoricInvoices']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Quantity'); ?></dt>
		<dd>
			<?php echo h($historicProduct['HistoricProduct']['product_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Price'); ?></dt>
		<dd>
			<?php echo h($historicProduct['HistoricProduct']['product_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Name'); ?></dt>
		<dd>
			<?php echo h($historicProduct['HistoricProduct']['product_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Format'); ?></dt>
		<dd>
			<?php echo h($historicProduct['HistoricProduct']['product_format']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Historic Product'), array('action' => 'edit', $historicProduct['HistoricProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Historic Product'), array('action' => 'delete', $historicProduct['HistoricProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $historicProduct['HistoricProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Historic Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historic Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historic Invoices'), array('controller' => 'historic_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historic Invoices'), array('controller' => 'historic_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
