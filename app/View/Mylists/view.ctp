<div class="mylists view">
<h2><?php  echo __('List'); ?></h2>
<div id="jb_indexview_actions">
	<div class="actions">
	<ul>	
		<li><?php echo $this->Html->link(__('Edit Contract'), array('action' => 'edit', $mylist['Mylist']['id']), array('escape' => false)); ?></li>
		<li><?php echo $this->Form->postLink(__('Delete Contract'), array('action' => 'delete', $mylist['Mylist']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $mylist['Mylist']['id'])); ?></li>
	</ul>
	</div>
</div>
	<dl>
		<dt><?php echo __('Status / Id'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['status']) . '/' . h($mylist['Mylist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City / State / Zip'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['city']) . ' ' . h($mylist['Mylist']['state']) . ' ' . h($mylist['Mylist']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 1'); ?></dt>
		<dd>
			<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $mylist['Mylist']['phone_1']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 2'); ?></dt>
		<dd>
			<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $mylist['Mylist']['phone_2']);?>
					&nbsp;
		</dd>
		
		
		<dt><?php echo __('Bride'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['primary_fname']) . ' ' . h($mylist['Mylist']['primary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groom'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['secondary_fname']) . ' ' . h($mylist['Mylist']['secondary_lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wedding Date'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['wedding_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referral Source'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['referral_source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['updated']); ?>
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
	<?php if (!empty($mylist['ContactNote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mylist['ContactNote'] as $contactNote): ?>
		<tr>
			<td><?php echo $contactNote['id']; ?></td>
			<td><?php echo $contactNote['contact_id']; ?></td>
			<td><?php echo $contactNote['name']; ?></td>
			<td><?php echo $contactNote['description']; ?></td>
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
			<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'contact_notes', 'action' => 'add', 'customer_id' => $mylist['Mylist']['id'])); ?> </li>
		</ul>
	</div>
</div>


