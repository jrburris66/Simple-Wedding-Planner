<ul>
		<li><?php echo $this->Html->link(__('List Lists'), array('controller' => 'mylists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leads'), array('controller' => 'leads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals'), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contracts'), array('controller' => 'contracts', 'action' => 'index')); ?> </li>
		<li> <br><hr /><br> </li>
		
		<li><?php echo $this->Html->link(__('New List'), array('controller' => 'mylists', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>
    	<li><?php echo $this->Html->link(__('New Lead'), array('controller' => 'leads', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>
 		<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>
 		<li><?php echo $this->Html->link(__('New Contract'), array('controller' => 'contracts', 'action' => 'add', 'plugin' => ''), array('escape' => false)); ?> </li>
     </ul>
