<div class="contractNotes index">
	<h2><?php echo __('Contract Notes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($contractNotes as $contractNote): ?>
	<tr>
		<td><?php echo h($contractNote['ContractNote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contractNote['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $contractNote['Contact']['id'])); ?>
		</td>
		<td><?php echo h($contractNote['ContractNote']['name']); ?>&nbsp;</td>
		<td><?php echo h($contractNote['ContractNote']['description']); ?>&nbsp;</td>
		<td><?php echo h($contractNote['ContractNote']['created']); ?>&nbsp;</td>
		<td><?php echo h($contractNote['ContractNote']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contractNote['ContractNote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contractNote['ContractNote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contractNote['ContractNote']['id']), null, __('Are you sure you want to delete # %s?', $contractNote['ContractNote']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Contract Note'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
