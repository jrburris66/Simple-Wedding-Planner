<div class="listNotes index">
	<h2><?php echo __('List Notes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('list_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($listNotes as $listNote): ?>
	<tr>
		<td><?php echo h($listNote['ListNote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listNote['List']['name'], array('controller' => 'lists', 'action' => 'view', $listNote['List']['id'])); ?>
		</td>
		<td><?php echo h($listNote['ListNote']['name']); ?>&nbsp;</td>
		<td><?php echo h($listNote['ListNote']['description']); ?>&nbsp;</td>
		<td><?php echo h($listNote['ListNote']['created']); ?>&nbsp;</td>
		<td><?php echo h($listNote['ListNote']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $listNote['ListNote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $listNote['ListNote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $listNote['ListNote']['id']), null, __('Are you sure you want to delete # %s?', $listNote['ListNote']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New List Note'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lists'), array('controller' => 'lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List'), array('controller' => 'lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
