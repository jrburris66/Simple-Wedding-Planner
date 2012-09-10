<div class="vendors index">
	<h2><?php echo __('Vendors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_cat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('rating_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price_range'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('terms'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('street1'); ?></th>
			<th><?php echo $this->Paginator->sort('street2'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('check'); ?></th>
			<th><?php echo $this->Paginator->sort('mastercard'); ?></th>
			<th><?php echo $this->Paginator->sort('visa'); ?></th>
			<th><?php echo $this->Paginator->sort('amex'); ?></th>
			<th><?php echo $this->Paginator->sort('discover'); ?></th>
			<th><?php echo $this->Paginator->sort('paypal'); ?></th>
			<th><?php echo $this->Paginator->sort('cash'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($vendors as $vendor): ?>
	<tr>
		<td><?php echo h($vendor['Vendor']['id']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['name']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['phone']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['fax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vendor['VendorCat']['name'], array('controller' => 'vendor_cats', 'action' => 'view', $vendor['VendorCat']['id'])); ?>
		</td>
		<td><?php echo h($vendor['Vendor']['rating']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vendor['Rating']['name'], array('controller' => 'ratings', 'action' => 'view', $vendor['Rating']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($vendor['Price']['name'], array('controller' => 'prices', 'action' => 'view', $vendor['Price']['id'])); ?>
		</td>
		<td><?php echo h($vendor['Vendor']['price_range']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['website']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['contact']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['contact_phone']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['email']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['terms']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['notes']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['street1']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['street2']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vendor['City']['name'], array('controller' => 'cities', 'action' => 'view', $vendor['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($vendor['State']['name'], array('controller' => 'states', 'action' => 'view', $vendor['State']['id'])); ?>
		</td>
		<td><?php echo h($vendor['Vendor']['zip']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['check']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['mastercard']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['visa']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['amex']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['discover']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['paypal']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['cash']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['created']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vendor['Vendor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vendor['Vendor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vendor['Vendor']['id']), null, __('Are you sure you want to delete # %s?', $vendor['Vendor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vendor'), array('action' => 'add')); ?></li>
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
