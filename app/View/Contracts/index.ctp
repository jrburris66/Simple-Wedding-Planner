<div class="contracts index">
	<h2><?php echo __('Contracts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_lname', 'Bride'); ?></th>
			<th><?php echo $this->Paginator->sort('secondary_lname', 'Groom'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($contracts as $contract): ?>
	<tr>
		<td><?php echo h($contract['Contract']['id']); ?>&nbsp;</td>
		<td><?php echo h($contract['Contract']['name']); ?>&nbsp;</td>
		<td><?php echo h($contract['Contract']['primary_lname']); ?>&nbsp;</td>
		<td><?php echo h($contract['Contract']['secondary_lname']); ?>&nbsp;</td>
		<td><?php echo h($contract['Contract']['city']); ?>&nbsp;</td>
		<td><?php echo h($contract['Contract']['state']); ?>&nbsp;</td>
		<td><?php echo h(date('m/d/Y', strtotime($contract['Contract']['created']))); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contract['Contract']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contract['Contract']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contract['Contract']['id']), null, __('Are you sure you want to delete # %s?', $contract['Contract']['id'])); ?>
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
	<?php echo $this->element('jb_menu_crm'); ?>
	
</div>
