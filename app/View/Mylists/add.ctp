<div class="mylists form">
<?php echo $this->Form->create('Mylist'); ?>
	<fieldset>
		<legend><?php echo __('Add Mylist'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('primary_fname');
		echo $this->Form->input('primary_lname');
		echo $this->Form->input('secondary_fname');
		echo $this->Form->input('secondary_lname');
		echo $this->Form->input('title_id');
		echo $this->Form->input('title2_id');
		echo $this->Form->input('email');
		echo $this->Form->input('phone_1');
		echo $this->Form->input('phone_1_type');
		echo $this->Form->input('phone_2');
		echo $this->Form->input('phone_2_type');
		echo $this->Form->input('wedding_date');
		echo $this->Form->input('street_1');
		echo $this->Form->input('street_2');
		echo $this->Form->input('zip');
		echo $this->Form->input('status');
		echo $this->Form->input('referral_source');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->element('jb_menu_crm'); ?>
	
</div>