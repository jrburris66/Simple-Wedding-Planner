<div class="vendors form">
<?php echo $this->Form->create('Vendor'); ?>
	<fieldset>
		<legend><?php echo __('Add Vendor'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('vendor_cat_id');
		echo $this->Form->input('rating');
		echo $this->Form->input('rating_id');
		echo $this->Form->input('price_id');
		echo $this->Form->input('price_range');
		echo $this->Form->input('website');
		echo $this->Form->input('contact');
		echo $this->Form->input('contact_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('terms');
		echo $this->Form->input('notes');
		echo $this->Form->input('street1');
		echo $this->Form->input('street2');
		echo $this->Form->input('city_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('zip');
		echo $this->Form->input('check');
		echo $this->Form->input('mastercard');
		echo $this->Form->input('visa');
		echo $this->Form->input('amex');
		echo $this->Form->input('discover');
		echo $this->Form->input('paypal');
		echo $this->Form->input('cash');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendor Cats'), array('controller' => 'vendor_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor Cat'), array('controller' => 'vendor_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prices'), array('controller' => 'prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Price'), array('controller' => 'prices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div>
