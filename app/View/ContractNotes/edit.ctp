<div class="contractNotes form">
<?php echo $this->Form->create('ContractNote'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contract Note'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContractNote.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContractNote.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contract Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
