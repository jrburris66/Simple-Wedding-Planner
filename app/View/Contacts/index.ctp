<div class="contacts index">
	<h2><?php echo __('Contacts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_fname'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_lname'); ?></th>
			<th><?php echo $this->Paginator->sort('secondary_fname'); ?></th>
			<th><?php echo $this->Paginator->sort('secondary_lname'); ?></th>
			<th><?php echo $this->Paginator->sort('title_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title2_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_1_type'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_2'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_2_type'); ?></th>
			<th><?php echo $this->Paginator->sort('wedding_date'); ?></th>
			<th><?php echo $this->Paginator->sort('street_1'); ?></th>
			<th><?php echo $this->Paginator->sort('street_2'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('referral_source'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['primary_fname']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['primary_lname']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['secondary_fname']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['secondary_lname']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contact['Title']['name'], array('controller' => 'titles', 'action' => 'view', $contact['Title']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contact['Title2']['name'], array('controller' => 'title2s', 'action' => 'view', $contact['Title2']['id'])); ?>
		</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_1']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_1_type']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_2']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_2_type']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['wedding_date']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['street_1']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['street_2']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['zip']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['status']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['referral_source']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['created']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['updated']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['city']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['state']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contact['Contact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contact['Contact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Title2s'), array('controller' => 'title2s', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title2'), array('controller' => 'title2s', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Notes'), array('controller' => 'contact_notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Note'), array('controller' => 'contact_notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Activities'), array('controller' => 'time_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Activity'), array('controller' => 'time_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
