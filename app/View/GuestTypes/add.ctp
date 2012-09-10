<div class="guestTypes form">
<?php echo $this->Form->create('GuestType'); ?>
	<fieldset>
		<legend><?php echo __('Add Guest Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guest Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
