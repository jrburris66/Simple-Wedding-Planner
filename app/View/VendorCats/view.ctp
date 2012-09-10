<div class="vendorCats view">
<h2><?php  echo __('Vendor Cat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vendorCat['VendorCat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vendorCat['VendorCat']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vendorCat['VendorCat']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($vendorCat['VendorCat']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vendor Cat'), array('action' => 'edit', $vendorCat['VendorCat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vendor Cat'), array('action' => 'delete', $vendorCat['VendorCat']['id']), null, __('Are you sure you want to delete # %s?', $vendorCat['VendorCat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendor Cats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor Cat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Vendors'); ?></h3>
	<?php if (!empty($vendorCat['Vendor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Vendor Cat Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Rating Id'); ?></th>
		<th><?php echo __('Price Id'); ?></th>
		<th><?php echo __('Price Range'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Contact Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Terms'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Street1'); ?></th>
		<th><?php echo __('Street2'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Check'); ?></th>
		<th><?php echo __('Mastercard'); ?></th>
		<th><?php echo __('Visa'); ?></th>
		<th><?php echo __('Amex'); ?></th>
		<th><?php echo __('Discover'); ?></th>
		<th><?php echo __('Paypal'); ?></th>
		<th><?php echo __('Cash'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendorCat['Vendor'] as $vendor): ?>
		<tr>
			<td><?php echo $vendor['id']; ?></td>
			<td><?php echo $vendor['name']; ?></td>
			<td><?php echo $vendor['phone']; ?></td>
			<td><?php echo $vendor['fax']; ?></td>
			<td><?php echo $vendor['vendor_cat_id']; ?></td>
			<td><?php echo $vendor['rating']; ?></td>
			<td><?php echo $vendor['rating_id']; ?></td>
			<td><?php echo $vendor['price_id']; ?></td>
			<td><?php echo $vendor['price_range']; ?></td>
			<td><?php echo $vendor['website']; ?></td>
			<td><?php echo $vendor['contact']; ?></td>
			<td><?php echo $vendor['contact_phone']; ?></td>
			<td><?php echo $vendor['email']; ?></td>
			<td><?php echo $vendor['terms']; ?></td>
			<td><?php echo $vendor['notes']; ?></td>
			<td><?php echo $vendor['street1']; ?></td>
			<td><?php echo $vendor['street2']; ?></td>
			<td><?php echo $vendor['city_id']; ?></td>
			<td><?php echo $vendor['state_id']; ?></td>
			<td><?php echo $vendor['zip']; ?></td>
			<td><?php echo $vendor['check']; ?></td>
			<td><?php echo $vendor['mastercard']; ?></td>
			<td><?php echo $vendor['visa']; ?></td>
			<td><?php echo $vendor['amex']; ?></td>
			<td><?php echo $vendor['discover']; ?></td>
			<td><?php echo $vendor['paypal']; ?></td>
			<td><?php echo $vendor['cash']; ?></td>
			<td><?php echo $vendor['created']; ?></td>
			<td><?php echo $vendor['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vendors', 'action' => 'view', $vendor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vendors', 'action' => 'edit', $vendor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vendors', 'action' => 'delete', $vendor['id']), null, __('Are you sure you want to delete # %s?', $vendor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
