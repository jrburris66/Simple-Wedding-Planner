<div class="leadNotes view">
<h2><?php  echo __('Lead Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leadNote['LeadNote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lead'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadNote['Lead']['name'], array('controller' => 'leads', 'action' => 'view', $leadNote['Lead']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($leadNote['LeadNote']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($leadNote['LeadNote']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($leadNote['LeadNote']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($leadNote['LeadNote']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lead Note'), array('action' => 'edit', $leadNote['LeadNote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lead Note'), array('action' => 'delete', $leadNote['LeadNote']['id']), null, __('Are you sure you want to delete # %s?', $leadNote['LeadNote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leads'), array('controller' => 'leads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead'), array('controller' => 'leads', 'action' => 'add')); ?> </li>
	</ul>
</div>
