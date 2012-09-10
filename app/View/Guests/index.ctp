<div class="guests index">
	<h2><?php echo __('Guests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('family_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('oot'); ?></th>
			<th><?php echo $this->Paginator->sort('guest_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('guest_role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invitation_list_priority'); ?></th>
			<th><?php echo $this->Paginator->sort('relationship_id'); ?></th>
			<th><?php echo $this->Paginator->sort('engagement_party_invited'); ?></th>
			<th><?php echo $this->Paginator->sort('engagement_party_rsvp'); ?></th>
			<th><?php echo $this->Paginator->sort('rehearsal_dinner_invited'); ?></th>
			<th><?php echo $this->Paginator->sort('rehearsal_dinner_rsvp'); ?></th>
			<th><?php echo $this->Paginator->sort('bridal_shower_invited'); ?></th>
			<th><?php echo $this->Paginator->sort('bridal_shower_rsvp'); ?></th>
			<th><?php echo $this->Paginator->sort('ceremony_invited'); ?></th>
			<th><?php echo $this->Paginator->sort('ceremony_rsvp'); ?></th>
			<th><?php echo $this->Paginator->sort('reception_invited'); ?></th>
			<th><?php echo $this->Paginator->sort('reception_rsvp'); ?></th>
			<th><?php echo $this->Paginator->sort('bridemaids_luncheon_invited'); ?></th>
			<th><?php echo $this->Paginator->sort('bridemaids_luncheon_rsvp'); ?></th>
			<th><?php echo $this->Paginator->sort('after_wedding_brunch_invited'); ?></th>
			<th><?php echo $this->Paginator->sort('after_wedding_brunch_rsvp'); ?></th>
			<th><?php echo $this->Paginator->sort('meal_choice'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($guests as $guest): ?>
	<tr>
		<td><?php echo h($guest['Guest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guest['Family']['name'], array('controller' => 'families', 'action' => 'view', $guest['Family']['id'])); ?>
		</td>
		<td><?php echo h($guest['Guest']['name']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['email']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['phone']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['oot']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guest['GuestType']['name'], array('controller' => 'guest_types', 'action' => 'view', $guest['GuestType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guest['GuestRole']['name'], array('controller' => 'guest_roles', 'action' => 'view', $guest['GuestRole']['id'])); ?>
		</td>
		<td><?php echo h($guest['Guest']['invitation_list_priority']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guest['Relationship']['name'], array('controller' => 'relationships', 'action' => 'view', $guest['Relationship']['id'])); ?>
		</td>
		<td><?php echo h($guest['Guest']['engagement_party_invited']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['engagement_party_rsvp']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['rehearsal_dinner_invited']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['rehearsal_dinner_rsvp']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['bridal_shower_invited']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['bridal_shower_rsvp']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['ceremony_invited']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['ceremony_rsvp']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['reception_invited']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['reception_rsvp']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['bridemaids_luncheon_invited']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['bridemaids_luncheon_rsvp']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['after_wedding_brunch_invited']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['after_wedding_brunch_rsvp']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['meal_choice']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['notes']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['created']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guest['Guest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guest['Guest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guest['Guest']['id']), null, __('Are you sure you want to delete # %s?', $guest['Guest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Guest'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guest Types'), array('controller' => 'guest_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest Type'), array('controller' => 'guest_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guest Roles'), array('controller' => 'guest_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest Role'), array('controller' => 'guest_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationships'), array('controller' => 'relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationship'), array('controller' => 'relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>
