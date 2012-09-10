<div class="vendors view">
<h2><?php  echo __('Vendor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor Cat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vendor['VendorCat']['name'], array('controller' => 'vendor_cats', 'action' => 'view', $vendor['VendorCat']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vendor['Rating']['name'], array('controller' => 'ratings', 'action' => 'view', $vendor['Rating']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vendor['Price']['name'], array('controller' => 'prices', 'action' => 'view', $vendor['Price']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Range'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['price_range']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Phone'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['contact_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terms'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['terms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street1'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['street1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street2'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['street2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vendor['City']['name'], array('controller' => 'cities', 'action' => 'view', $vendor['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vendor['State']['name'], array('controller' => 'states', 'action' => 'view', $vendor['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['check']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mastercard'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['mastercard']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visa'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['visa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amex'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['amex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discover'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['discover']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paypal'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['paypal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['cash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vendor'), array('action' => 'edit', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vendor'), array('action' => 'delete', $vendor['Vendor']['id']), null, __('Are you sure you want to delete # %s?', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('action' => 'add')); ?> </li>
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
