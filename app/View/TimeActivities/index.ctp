<div class="timeActivities index">
	<h2><?php echo __('Time Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_date'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_id'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th><?php echo $this->Paginator->sort('hours'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($timeActivities as $timeActivity): ?>
	<tr>
		<td><?php echo h($timeActivity['TimeActivity']['id']); ?>&nbsp;</td>
		<td><?php echo h($timeActivity['TimeActivity']['name']); ?>&nbsp;</td>
		<td><?php echo h($timeActivity['TimeActivity']['activity_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timeActivity['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $timeActivity['Contact']['id'])); ?>
		</td>
		<td><?php echo h($timeActivity['TimeActivity']['details']); ?>&nbsp;</td>
		<td><?php echo h($timeActivity['TimeActivity']['hours']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timeActivity['User']['name'], array('controller' => 'users', 'action' => 'view', $timeActivity['User']['id'])); ?>
		</td>
		<td><?php echo h($timeActivity['TimeActivity']['created']); ?>&nbsp;</td>
		<td><?php echo h($timeActivity['TimeActivity']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timeActivity['TimeActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timeActivity['TimeActivity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timeActivity['TimeActivity']['id']), null, __('Are you sure you want to delete # %s?', $timeActivity['TimeActivity']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Time Activity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
