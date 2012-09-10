<div class="proposals view">
<h2><?php  echo __('Proposal'); ?></h2>
<div id="jb_indexview_actions">
	<div class="actions">
	<ul>	
		<li><?php echo $this->Html->link(__('Edit Contract'), array('action' => 'edit', $proposal['Proposal']['id']), array('escape' => false)); ?></li>
		<li><?php echo $this->Form->postLink(__('Delete Contract'), array('action' => 'delete', $proposal['Proposal']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $proposal['Proposal']['id'])); ?></li>
	</ul>
	</div>
</div>
	<dl>
		<dt><?php echo __('Status / Id'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['status']) . '/' . h($proposal['Proposal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City / State / Zip'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['city']) . ' ' . h($proposal['Proposal']['state']) . ' ' . h($proposal['Proposal']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 1'); ?></dt>
		<dd>
			<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $proposal['Proposal']['phone_1']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 2'); ?></dt>
		<dd>
			<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $proposal['Proposal']['phone_2']);?>
					&nbsp;
		</dd>
		<dt><?php echo __('Bride'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['primary_fname']) . ' ' . h($proposal['Proposal']['primary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groom'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['secondary_fname']) . ' ' . h($proposal['Proposal']['secondary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wedding Date'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['wedding_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referral Source'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['referral_source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['updated']); ?>
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
	<?php if (!empty($proposal['ContactNote'])): ?>
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
		foreach ($proposal['ContactNote'] as $contactNote): ?>
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
			<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'contact_notes', 'action' => 'add', 'customer_id' => $proposal['Proposal']['id'])); ?> </li>
		</ul>
	</div>
</div>




<div class="related">
	<h3><?php echo __('Related Families'); ?></h3>
	<?php if (!empty($proposal['Family'])): ?>
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
		foreach ($proposal['Family'] as $family): ?>
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
			<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add', 'customer_id' => $proposal['Proposal']['id'])); ?> </li>
			
		</ul>
	</div>
</div>

