<div class="contactNotes view">
<h2><?php  echo __('Contact Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactNote['ContactNote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactNote['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $contactNote['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contactNote['ContactNote']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($contactNote['ContactNote']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contactNote['ContactNote']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($contactNote['ContactNote']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Note'), array('action' => 'edit', $contactNote['ContactNote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Note'), array('action' => 'delete', $contactNote['ContactNote']['id']), null, __('Are you sure you want to delete # %s?', $contactNote['ContactNote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
