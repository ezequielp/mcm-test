<div class="authorizations form">
<?php echo $this->Form->create('Authorization'); ?>
	<fieldset>
		<legend><?php echo __('Edit Authorization'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('demo_link_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Authorization.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Authorization.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Authorizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Demo Links'), array('controller' => 'demo_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Demo Link'), array('controller' => 'demo_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
