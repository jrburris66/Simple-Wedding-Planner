<div class="vendorCats form">
<?php echo $this->Form->create('VendorCat'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vendor Cat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VendorCat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VendorCat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vendor Cats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
