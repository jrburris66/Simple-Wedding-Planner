<div class="families index">
	<h2><?php echo __('Families'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contract_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('street_1'); ?></th>
			<th><?php echo $this->Paginator->sort('street_2'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('relationship_id'); ?></th>
			<th><?php echo $this->Paginator->sort('send_engagement_announcement'); ?></th>
			<th><?php echo $this->Paginator->sort('outer_envelope'); ?></th>
			<th><?php echo $this->Paginator->sort('inner_envelope'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($families as $family): ?>
	<tr>
		<td><?php echo h($family['Family']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($family['Contract']['name'], array('controller' => 'contracts', 'action' => 'view', $family['Contract']['id'])); ?>
		</td>
		<td><?php echo h($family['Family']['name']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['street_1']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['street_2']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['city']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['state']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['zip']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['country']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($family['Relationship']['name'], array('controller' => 'relationships', 'action' => 'view', $family['Relationship']['id'])); ?>
		</td>
		<td><?php echo h($family['Family']['send_engagement_announcement']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['outer_envelope']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['inner_envelope']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['notes']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['created']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $family['Family']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $family['Family']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $family['Family']['id']), null, __('Are you sure you want to delete # %s?', $family['Family']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Family'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contracts'), array('controller' => 'contracts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contract'), array('controller' => 'contracts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationships'), array('controller' => 'relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationship'), array('controller' => 'relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
