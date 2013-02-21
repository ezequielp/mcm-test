<div class="authorizations view">
<h2><?php  echo __('Authorization'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($authorization['Authorization']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($authorization['User']['id'], array('controller' => 'users', 'action' => 'view', $authorization['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demo Link'); ?></dt>
		<dd>
			<?php echo $this->Html->link($authorization['DemoLink']['id'], array('controller' => 'demo_links', 'action' => 'view', $authorization['DemoLink']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($authorization['Authorization']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($authorization['Authorization']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($authorization['Authorization']['Active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($authorization['Authorization']['Created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($authorization['Authorization']['Updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Authorization'), array('action' => 'edit', $authorization['Authorization']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Authorization'), array('action' => 'delete', $authorization['Authorization']['id']), null, __('Are you sure you want to delete # %s?', $authorization['Authorization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authorization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Demo Links'), array('controller' => 'demo_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Demo Link'), array('controller' => 'demo_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
