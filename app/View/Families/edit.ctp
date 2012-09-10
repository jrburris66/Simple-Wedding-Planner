<div class="families form">
<?php echo $this->Form->create('Family'); ?>
	<fieldset>
		<legend><?php echo __('Edit Family'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contract_id', array('	disabled'=>TRUE));			
		//echo $this->Form->value('Contract.name');
		echo $this->Form->input('name');
		echo $this->Form->input('street_1');
		echo $this->Form->input('street_2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('country');
		echo $this->Form->input('relationship_id');
		echo $this->Form->input('send_engagement_announcement');
		echo $this->Form->input('outer_envelope');
		echo $this->Form->input('inner_envelope');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Family.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Family.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Families'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contracts'), array('controller' => 'contracts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contract'), array('controller' => 'contracts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationships'), array('controller' => 'relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationship'), array('controller' => 'relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
