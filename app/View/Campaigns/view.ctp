<div class="campaigns view">
<h2><?php  echo __('Campaign'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demo Link'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campaign['DemoLink']['id'], array('controller' => 'demo_links', 'action' => 'view', $campaign['DemoLink']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDate'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['StartDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDate'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['EndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['Active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['Created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['Updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campaign'), array('action' => 'edit', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campaign'), array('action' => 'delete', $campaign['Campaign']['id']), null, __('Are you sure you want to delete # %s?', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Demo Links'), array('controller' => 'demo_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Demo Link'), array('controller' => 'demo_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
