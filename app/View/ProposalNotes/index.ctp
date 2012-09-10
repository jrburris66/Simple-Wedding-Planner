<div class="proposalNotes index">
	<h2><?php echo __('Proposal Notes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('proposal_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($proposalNotes as $proposalNote): ?>
	<tr>
		<td><?php echo h($proposalNote['ProposalNote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proposalNote['Proposal']['name'], array('controller' => 'proposals', 'action' => 'view', $proposalNote['Proposal']['id'])); ?>
		</td>
		<td><?php echo h($proposalNote['ProposalNote']['name']); ?>&nbsp;</td>
		<td><?php echo h($proposalNote['ProposalNote']['description']); ?>&nbsp;</td>
		<td><?php echo h($proposalNote['ProposalNote']['created']); ?>&nbsp;</td>
		<td><?php echo h($proposalNote['ProposalNote']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proposalNote['ProposalNote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proposalNote['ProposalNote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proposalNote['ProposalNote']['id']), null, __('Are you sure you want to delete # %s?', $proposalNote['ProposalNote']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proposal Note'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proposals'), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>
