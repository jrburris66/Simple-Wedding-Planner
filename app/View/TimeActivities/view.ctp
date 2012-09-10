<div class="timeActivities view">
<h2><?php  echo __('Time Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timeActivity['TimeActivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($timeActivity['TimeActivity']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Date'); ?></dt>
		<dd>
			<?php echo h($timeActivity['TimeActivity']['activity_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timeActivity['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $timeActivity['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($timeActivity['TimeActivity']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hours'); ?></dt>
		<dd>
			<?php echo h($timeActivity['TimeActivity']['hours']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timeActivity['User']['name'], array('controller' => 'users', 'action' => 'view', $timeActivity['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($timeActivity['TimeActivity']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($timeActivity['TimeActivity']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time Activity'), array('action' => 'edit', $timeActivity['TimeActivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time Activity'), array('action' => 'delete', $timeActivity['TimeActivity']['id']), null, __('Are you sure you want to delete # %s?', $timeActivity['TimeActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
