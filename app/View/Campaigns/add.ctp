<div class="campaigns form">
<?php echo $this->Form->create('Campaign'); ?>
	<fieldset>
		<legend><?php echo __('Add Campaign'); ?></legend>
	<?php
		echo $this->Form->input('demo_link_id');
		echo $this->Form->input('Name');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EndDate');
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

		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Demo Links'), array('controller' => 'demo_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Demo Link'), array('controller' => 'demo_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
