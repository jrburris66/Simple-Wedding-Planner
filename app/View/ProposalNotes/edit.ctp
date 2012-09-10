<div class="proposalNotes form">
<?php echo $this->Form->create('ProposalNote'); ?>
	<fieldset>
		<legend><?php echo __('Edit Proposal Note'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proposal_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProposalNote.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProposalNote.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proposal Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proposals'), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>
