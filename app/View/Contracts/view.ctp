<div class="contracts view">
<h2><?php  echo __('Contracts'); ?></h2>
<div id="jb_indexview_actions">
	<div class="actions">
	<ul>	
		<li><?php echo $this->Html->link(__('Edit Contract'), array('action' => 'edit', $contract['Contract']['id']), array('escape' => false)); ?></li>
		<li><?php echo $this->Form->postLink(__('Delete Contract'), array('action' => 'delete', $contract['Contract']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contract['Contract']['id'])); ?></li>
	</ul>
	</div>
</div>
	<dl>
		<dt><?php echo __('Status / Id'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['status']) . '/' . h($contract['Contract']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City / State / Zip'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['city']) . ' ' . h($contract['Contract']['state']) . ' ' . h($contract['Contract']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 1'); ?></dt>
		<dd>
			<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $contract['Contract']['phone_1']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 2'); ?></dt>
		<dd>
			<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $contract['Contract']['phone_2']);?>
					&nbsp;
		</dd>
		<dt><?php echo __('Bride'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['primary_fname']) . ' ' . h($contract['Contract']['primary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groom'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['secondary_fname']) . ' ' . h($contract['Contract']['secondary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wedding Date'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['wedding_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referral Source'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['referral_source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($contract['Contract']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->element('jb_menu_crm'); ?>
	
</div>


<div class="related">
	<h3><?php echo __('Related Notes'); ?></h3>
	<?php if (!empty($contract['ContactNote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contract['ContactNote'] as $contactNote): ?>
		<tr>
			<td><?php echo $contactNote['id']; ?></td>
			<td><?php echo $contactNote['name']; ?></td>
			<td><?php echo date('m/d/Y', strtotime($contactNote['created'])); ?></td>
			<td><?php echo date('m/d/Y', strtotime($contactNote['updated'])); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contact_notes', 'action' => 'view', $contactNote['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contact_notes', 'action' => 'edit', $contactNote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'contact_notes', 'action' => 'add', 'customer_id' => $contract['Contract']['id'])); ?> </li>
		</ul>
	</div>
</div>


<div class="related">
	<h3><?php echo __('Related Families'); ?></h3>
	<?php if (!empty($contract['Family'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
		
		</tr>
	<?php
		$i = 0;
		foreach ($contract['Family'] as $family): ?>
		<tr>
			<td><?php echo $family['id']; ?></td>
			<td><?php echo $family['name']; ?></td>
			<td><?php echo $family['city']; ?></td>
			<td><?php echo $family['state']; ?></td>
			<td><?php echo date('m/d/Y', strtotime($family['created'])); ?></td>
			<td><?php echo date('m/d/Y', strtotime($family['updated'])); ?></td>
					<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'families', 'action' => 'view', $family['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'families', 'action' => 'edit', $family['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'families', 'action' => 'delete', $family['id']), null, __('Are you sure you want to delete # %s?', $family['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add', 'customer_id' => $contract['Contract']['id'])); ?> </li>
		</ul>
	</div>
</div>
