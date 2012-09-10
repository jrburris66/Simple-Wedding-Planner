<div class="listNotes form">
<?php echo $this->Form->create('ListNote'); ?>
	<fieldset>
		<legend><?php echo __('Add List Note'); ?></legend>
	<?php
		echo $this->Form->input('list_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List List Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lists'), array('controller' => 'lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List'), array('controller' => 'lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
