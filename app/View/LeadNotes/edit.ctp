<div class="leadNotes form">
<?php echo $this->Form->create('LeadNote'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lead Note'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lead_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LeadNote.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LeadNote.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lead Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Leads'), array('controller' => 'leads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead'), array('controller' => 'leads', 'action' => 'add')); ?> </li>
	</ul>
</div>
