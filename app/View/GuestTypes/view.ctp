<div class="guestTypes view">
<h2><?php  echo __('Guest Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guestType['GuestType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($guestType['GuestType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($guestType['GuestType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($guestType['GuestType']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guest Type'), array('action' => 'edit', $guestType['GuestType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guest Type'), array('action' => 'delete', $guestType['GuestType']['id']), null, __('Are you sure you want to delete # %s?', $guestType['GuestType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guest Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Guests'); ?></h3>
	<?php if (!empty($guestType['Guest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Family Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Oot'); ?></th>
		<th><?php echo __('Guest Type Id'); ?></th>
		<th><?php echo __('Guest Role Id'); ?></th>
		<th><?php echo __('Invitation List Priority'); ?></th>
		<th><?php echo __('Relationship Id'); ?></th>
		<th><?php echo __('Engagement Party Invited'); ?></th>
		<th><?php echo __('Engagement Party Rsvp'); ?></th>
		<th><?php echo __('Rehearsal Dinner Invited'); ?></th>
		<th><?php echo __('Rehearsal Dinner Rsvp'); ?></th>
		<th><?php echo __('Bridal Shower Invited'); ?></th>
		<th><?php echo __('Bridal Shower Rsvp'); ?></th>
		<th><?php echo __('Ceremony Invited'); ?></th>
		<th><?php echo __('Ceremony Rsvp'); ?></th>
		<th><?php echo __('Reception Invited'); ?></th>
		<th><?php echo __('Reception Rsvp'); ?></th>
		<th><?php echo __('Bridemaids Luncheon Invited'); ?></th>
		<th><?php echo __('Bridemaids Luncheon Rsvp'); ?></th>
		<th><?php echo __('After Wedding Brunch Invited'); ?></th>
		<th><?php echo __('After Wedding Brunch Rsvp'); ?></th>
		<th><?php echo __('Meal Choice'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($guestType['Guest'] as $guest): ?>
		<tr>
			<td><?php echo $guest['id']; ?></td>
			<td><?php echo $guest['family_id']; ?></td>
			<td><?php echo $guest['name']; ?></td>
			<td><?php echo $guest['email']; ?></td>
			<td><?php echo $guest['phone']; ?></td>
			<td><?php echo $guest['mobile']; ?></td>
			<td><?php echo $guest['oot']; ?></td>
			<td><?php echo $guest['guest_type_id']; ?></td>
			<td><?php echo $guest['guest_role_id']; ?></td>
			<td><?php echo $guest['invitation_list_priority']; ?></td>
			<td><?php echo $guest['relationship_id']; ?></td>
			<td><?php echo $guest['engagement_party_invited']; ?></td>
			<td><?php echo $guest['engagement_party_rsvp']; ?></td>
			<td><?php echo $guest['rehearsal_dinner_invited']; ?></td>
			<td><?php echo $guest['rehearsal_dinner_rsvp']; ?></td>
			<td><?php echo $guest['bridal_shower_invited']; ?></td>
			<td><?php echo $guest['bridal_shower_rsvp']; ?></td>
			<td><?php echo $guest['ceremony_invited']; ?></td>
			<td><?php echo $guest['ceremony_rsvp']; ?></td>
			<td><?php echo $guest['reception_invited']; ?></td>
			<td><?php echo $guest['reception_rsvp']; ?></td>
			<td><?php echo $guest['bridemaids_luncheon_invited']; ?></td>
			<td><?php echo $guest['bridemaids_luncheon_rsvp']; ?></td>
			<td><?php echo $guest['after_wedding_brunch_invited']; ?></td>
			<td><?php echo $guest['after_wedding_brunch_rsvp']; ?></td>
			<td><?php echo $guest['meal_choice']; ?></td>
			<td><?php echo $guest['notes']; ?></td>
			<td><?php echo $guest['created']; ?></td>
			<td><?php echo $guest['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'guests', 'action' => 'view', $guest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'guests', 'action' => 'edit', $guest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'guests', 'action' => 'delete', $guest['id']), null, __('Are you sure you want to delete # %s?', $guest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
