<div class="contacts view">
<h2><?php  echo __('Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Fname'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['primary_fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Lname'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['primary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Fname'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['secondary_fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Lname'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['secondary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['Title']['name'], array('controller' => 'titles', 'action' => 'view', $contact['Title']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['Title2']['name'], array('controller' => 'title2s', 'action' => 'view', $contact['Title2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 1'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 1 Type'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_1_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 2'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 2 Type'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_2_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wedding Date'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['wedding_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street 1'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['street_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street 2'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['street_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referral Source'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['referral_source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Contact Notes'); ?></h3>
	<?php if (!empty($contact['ContactNote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contact['ContactNote'] as $contactNote): ?>
		<tr>
			<td><?php echo $contactNote['id']; ?></td>
			<td><?php echo $contactNote['contact_id']; ?></td>
			<td><?php echo $contactNote['name']; ?></td>
			<td><?php echo $contactNote['description']; ?></td>
			<td><?php echo $contactNote['created']; ?></td>
			<td><?php echo $contactNote['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contact_notes', 'action' => 'view', $contactNote['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contact_notes', 'action' => 'edit', $contactNote['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contact_notes', 'action' => 'delete', $contactNote['id']), null, __('Are you sure you want to delete # %s?', $contactNote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact Note'), array('controller' => 'contact_notes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($contact['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Type Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('All Day'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contact['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['event_type_id']; ?></td>
			<td><?php echo $event['contact_id']; ?></td>
			<td><?php echo $event['title']; ?></td>
			<td><?php echo $event['details']; ?></td>
			<td><?php echo $event['start']; ?></td>
			<td><?php echo $event['end']; ?></td>
			<td><?php echo $event['all_day']; ?></td>
			<td><?php echo $event['status']; ?></td>
			<td><?php echo $event['active']; ?></td>
			<td><?php echo $event['created']; ?></td>
			<td><?php echo $event['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), null, __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Families'); ?></h3>
	<?php if (!empty($contact['Family'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contract Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Street 1'); ?></th>
		<th><?php echo __('Street 2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Relationship Id'); ?></th>
		<th><?php echo __('Send Engagement Announcement'); ?></th>
		<th><?php echo __('Outer Envelope'); ?></th>
		<th><?php echo __('Inner Envelope'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contact['Family'] as $family): ?>
		<tr>
			<td><?php echo $family['id']; ?></td>
			<td><?php echo $family['contract_id']; ?></td>
			<td><?php echo $family['name']; ?></td>
			<td><?php echo $family['street_1']; ?></td>
			<td><?php echo $family['street_2']; ?></td>
			<td><?php echo $family['city']; ?></td>
			<td><?php echo $family['state']; ?></td>
			<td><?php echo $family['zip']; ?></td>
			<td><?php echo $family['country']; ?></td>
			<td><?php echo $family['relationship_id']; ?></td>
			<td><?php echo $family['send_engagement_announcement']; ?></td>
			<td><?php echo $family['outer_envelope']; ?></td>
			<td><?php echo $family['inner_envelope']; ?></td>
			<td><?php echo $family['notes']; ?></td>
			<td><?php echo $family['created']; ?></td>
			<td><?php echo $family['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'families', 'action' => 'view', $family['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'families', 'action' => 'edit', $family['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'families', 'action' => 'delete', $family['id']), null, __('Are you sure you want to delete # %s?', $family['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Time Activities'); ?></h3>
	<?php if (!empty($contact['TimeActivity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Activity Date'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Hours'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contact['TimeActivity'] as $timeActivity): ?>
		<tr>
			<td><?php echo $timeActivity['id']; ?></td>
			<td><?php echo $timeActivity['name']; ?></td>
			<td><?php echo $timeActivity['activity_date']; ?></td>
			<td><?php echo $timeActivity['contact_id']; ?></td>
			<td><?php echo $timeActivity['details']; ?></td>
			<td><?php echo $timeActivity['hours']; ?></td>
			<td><?php echo $timeActivity['user_id']; ?></td>
			<td><?php echo $timeActivity['created']; ?></td>
			<td><?php echo $timeActivity['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'time_activities', 'action' => 'view', $timeActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'time_activities', 'action' => 'edit', $timeActivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'time_activities', 'action' => 'delete', $timeActivity['id']), null, __('Are you sure you want to delete # %s?', $timeActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time Activity'), array('controller' => 'time_activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
