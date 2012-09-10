<div class="guests view">
<h2><?php  echo __('Guest'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guest['Family']['name'], array('controller' => 'families', 'action' => 'view', $guest['Family']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oot'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['oot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guest Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guest['GuestType']['name'], array('controller' => 'guest_types', 'action' => 'view', $guest['GuestType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guest Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guest['GuestRole']['name'], array('controller' => 'guest_roles', 'action' => 'view', $guest['GuestRole']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invitation List Priority'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['invitation_list_priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guest['Relationship']['name'], array('controller' => 'relationships', 'action' => 'view', $guest['Relationship']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Engagement Party Invited'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['engagement_party_invited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Engagement Party Rsvp'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['engagement_party_rsvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rehearsal Dinner Invited'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['rehearsal_dinner_invited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rehearsal Dinner Rsvp'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['rehearsal_dinner_rsvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bridal Shower Invited'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['bridal_shower_invited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bridal Shower Rsvp'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['bridal_shower_rsvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceremony Invited'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['ceremony_invited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceremony Rsvp'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['ceremony_rsvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reception Invited'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['reception_invited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reception Rsvp'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['reception_rsvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bridemaids Luncheon Invited'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['bridemaids_luncheon_invited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bridemaids Luncheon Rsvp'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['bridemaids_luncheon_rsvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('After Wedding Brunch Invited'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['after_wedding_brunch_invited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('After Wedding Brunch Rsvp'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['after_wedding_brunch_rsvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meal Choice'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['meal_choice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guest'), array('action' => 'edit', $guest['Guest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guest'), array('action' => 'delete', $guest['Guest']['id']), null, __('Are you sure you want to delete # %s?', $guest['Guest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('action' => 'add')); ?> </li>
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
