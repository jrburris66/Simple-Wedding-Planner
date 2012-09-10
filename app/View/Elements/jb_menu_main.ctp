<ul>
	<li><?php echo $this->Html->link($this->Html->image("crm/contact.png") . " " .  __('Lists/Leads'), array('controller' => 'contacts', 'action' => 'index', 'plugin' => ''), array('escape' => false)); ?> </li>
    <li><?php echo $this->Html->link($this->Html->image("crm/page.png") . " " .  __('Proposals'), array('controller' => 'proposals', 'action' => 'index', 'plugin' => ''), array('escape' => false)); ?> </li>
    <li><?php echo $this->Html->link($this->Html->image("crm/group.png") . " " .  __('Contracts'), array('controller' => 'contracts', 'action' => 'index', 'plugin' => ''), array('escape' => false)); ?> </li>
    <li><?php echo $this->Html->link($this->Html->image("crm/contact_add.png") . " " . __('Guest'), array('controller' => 'guests', 'action' => 'index', 'plugin' => ''), array('escape' => false)); ?> </li>
    
    <li><hr /></li>
	<li><?php echo $this->Html->link($this->Html->image("crm/contact_add.png") . " " .  __('New Lists/Leads'), array('controller' => 'contacts', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>
    <li><?php echo $this->Html->link($this->Html->image("crm/page_add.png") . " " .  __('New Proposals'), array('controller' => 'proposals', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>
    <li><?php echo $this->Html->link($this->Html->image("crm/group_add.png") . " " .  __('New Contracts'), array('controller' => 'contracts', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>
    
    <li><?php echo $this->Html->link($this->Html->image("crm/contact_add.png") . " " . __('New Guest'), array('controller' => 'guests', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>

    <li><hr /></li>
    
    <li><?php echo $this->Html->link($this->Html->image("crm/business.gif") . " " .  __('Vendors (will hide!)'), array('controller' => 'vendors', 'action' => 'index', 'plugin' => ''), array('escape' => false)); ?> </li>
    
    
    </ul>

	