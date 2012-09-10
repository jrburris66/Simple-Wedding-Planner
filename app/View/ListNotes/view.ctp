<div class="listNotes view">
<h2><?php  echo __('List Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($listNote['ListNote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('List'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listNote['List']['name'], array('controller' => 'lists', 'action' => 'view', $listNote['List']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($listNote['ListNote']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($listNote['ListNote']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($listNote['ListNote']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($listNote['ListNote']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit List Note'), array('action' => 'edit', $listNote['ListNote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete List Note'), array('action' => 'delete', $listNote['ListNote']['id']), null, __('Are you sure you want to delete # %s?', $listNote['ListNote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List List Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lists'), array('controller' => 'lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List'), array('controller' => 'lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
