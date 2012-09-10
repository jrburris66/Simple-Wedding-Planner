<div class="proposals form">
<?php echo $this->Form->create('Proposal'); ?>
	<fieldset>
		<legend><?php echo __('Add Proposal'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('primary_fname');
		echo $this->Form->input('primary_lname');
		echo $this->Form->input('secondary_fname');
		echo $this->Form->input('secondary_lname');
		echo $this->Form->input('title_id');
		echo $this->Form->input('title2_id');
		echo $this->Form->input('email');
		echo $this->Form->input('phone_1');
		echo $this->Form->input('phone_1_type');
		echo $this->Form->input('phone_2');
		echo $this->Form->input('phone_2_type');
		echo $this->Form->input('wedding_date');
		echo $this->Form->input('street_1');
		echo $this->Form->input('street_2');
		echo $this->Form->input('zip');
		echo $this->Form->input('status');
		echo $this->Form->input('referral_source');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proposals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Title2s'), array('controller' => 'title2s', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title2'), array('controller' => 'title2s', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposal Notes'), array('controller' => 'proposal_notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal Note'), array('controller' => 'proposal_notes', 'action' => 'add')); ?> </li>
	</ul>
</div>
