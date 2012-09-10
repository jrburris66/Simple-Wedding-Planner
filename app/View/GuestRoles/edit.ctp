<div class="guestRoles form">
<?php echo $this->Form->create('GuestRole'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guest Role'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GuestRole.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GuestRole.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guest Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
