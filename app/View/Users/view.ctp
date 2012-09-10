<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Activities'), array('controller' => 'time_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Activity'), array('controller' => 'time_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Time Activities'); ?></h3>
	<?php if (!empty($user['TimeActivity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Activity Date'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Hours'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['TimeActivity'] as $timeActivity): ?>
		<tr>
			<td><?php echo $timeActivity['id']; ?></td>
			<td><?php echo $timeActivity['name']; ?></td>
			<td><?php echo $timeActivity['activity_date']; ?></td>
			<td><?php echo $timeActivity['contact_id']; ?></td>
			<td><?php echo $timeActivity['details']; ?></td>
			<td><?php echo $timeActivity['hours']; ?></td>
			<td><?php echo $timeActivity['user_id']; ?></td>
			<td><?php echo $timeActivity['created']; ?></td>
			<td><?php echo $timeActivity['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'time_activities', 'action' => 'view', $timeActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'time_activities', 'action' => 'edit', $timeActivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'time_activities', 'action' => 'delete', $timeActivity['id']), null, __('Are you sure you want to delete # %s?', $timeActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time Activity'), array('controller' => 'time_activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
