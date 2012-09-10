<div class="guests form">
<?php echo $this->Form->create('Guest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guest'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('family_id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('oot');
		echo $this->Form->input('guest_type_id');
		echo $this->Form->input('guest_role_id');
		echo $this->Form->input('invitation_list_priority');
		echo $this->Form->input('relationship_id');
		echo $this->Form->input('engagement_party_invited');
		echo $this->Form->input('engagement_party_rsvp');
		echo $this->Form->input('rehearsal_dinner_invited');
		echo $this->Form->input('rehearsal_dinner_rsvp');
		echo $this->Form->input('bridal_shower_invited');
		echo $this->Form->input('bridal_shower_rsvp');
		echo $this->Form->input('ceremony_invited');
		echo $this->Form->input('ceremony_rsvp');
		echo $this->Form->input('reception_invited');
		echo $this->Form->input('reception_rsvp');
		echo $this->Form->input('bridemaids_luncheon_invited');
		echo $this->Form->input('bridemaids_luncheon_rsvp');
		echo $this->Form->input('after_wedding_brunch_invited');
		echo $this->Form->input('after_wedding_brunch_rsvp');
		echo $this->Form->input('meal_choice');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Guest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Guest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('action' => 'index')); ?></li>
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
