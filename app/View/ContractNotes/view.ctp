<div class="contractNotes view">
<h2><?php  echo __('Contract Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contractNote['ContractNote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contractNote['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $contractNote['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contractNote['ContractNote']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($contractNote['ContractNote']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contractNote['ContractNote']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($contractNote['ContractNote']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contract Note'), array('action' => 'edit', $contractNote['ContractNote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contract Note'), array('action' => 'delete', $contractNote['ContractNote']['id']), null, __('Are you sure you want to delete # %s?', $contractNote['ContractNote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contract Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contract Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
