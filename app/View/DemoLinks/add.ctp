<div class="demoLinks form">
<?php echo $this->Form->create('DemoLink'); ?>
	<fieldset>
		<legend><?php echo __('Add Demo Link'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
		echo $this->Form->input('Active');
		echo $this->Form->input('Created');
		echo $this->Form->input('Updated');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Demo Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authorizations'), array('controller' => 'authorizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authorization'), array('controller' => 'authorizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
