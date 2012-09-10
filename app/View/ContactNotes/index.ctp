<div class="contactNotes index">
	<h2><?php echo __('Contact Notes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($contactNotes as $contactNote): ?>
	<tr>
		<td><?php echo h($contactNote['ContactNote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contactNote['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $contactNote['Contact']['id'])); ?>
		</td>
		<td><?php echo h($contactNote['ContactNote']['name']); ?>&nbsp;</td>
		<td><?php echo h($contactNote['ContactNote']['created']); ?>&nbsp;</td>
		<td><?php echo h($contactNote['ContactNote']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactNote['ContactNote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactNote['ContactNote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactNote['ContactNote']['id']), null, __('Are you sure you want to delete # %s?', $contactNote['ContactNote']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contact Note'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
