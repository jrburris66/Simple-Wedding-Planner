<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Time Activities'), array('controller' => 'time_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Activity'), array('controller' => 'time_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
