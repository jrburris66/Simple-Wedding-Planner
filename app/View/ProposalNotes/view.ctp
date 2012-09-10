<div class="proposalNotes view">
<h2><?php  echo __('Proposal Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proposalNote['ProposalNote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proposal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proposalNote['Proposal']['name'], array('controller' => 'proposals', 'action' => 'view', $proposalNote['Proposal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($proposalNote['ProposalNote']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($proposalNote['ProposalNote']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proposalNote['ProposalNote']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($proposalNote['ProposalNote']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proposal Note'), array('action' => 'edit', $proposalNote['ProposalNote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proposal Note'), array('action' => 'delete', $proposalNote['ProposalNote']['id']), null, __('Are you sure you want to delete # %s?', $proposalNote['ProposalNote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposal Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals'), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>
