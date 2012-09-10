<div class="contactNotes form">
<?php echo $this->Form->create('ContactNote'); ?>
	<fieldset>
		<legend><?php echo __('Add Contact Note'); ?></legend>
	<?php
	
		// echo debug($this->viewVars);
		
		if (isset($this->params['named']['customer_id'])) {	
			echo $this->Form->input('contact_id', array('type'=>'hidden', 'default'=>$this->params['named']['customer_id']));
			echo $this->Form->input('contact_id', array('type'=>'select','disabled'=>true, 'default'=>$this->params['named']['customer_id']));
		} else {
			echo $this->Form->input('contact_id');
		}
		
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contact Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
