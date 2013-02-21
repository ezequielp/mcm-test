<div class="demoLinks view">
<h2><?php  echo __('Demo Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($demoLink['DemoLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($demoLink['DemoLink']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($demoLink['DemoLink']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($demoLink['DemoLink']['Active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($demoLink['DemoLink']['Created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($demoLink['DemoLink']['Updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Demo Link'), array('action' => 'edit', $demoLink['DemoLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Demo Link'), array('action' => 'delete', $demoLink['DemoLink']['id']), null, __('Are you sure you want to delete # %s?', $demoLink['DemoLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Demo Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Demo Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorizations'), array('controller' => 'authorizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authorization'), array('controller' => 'authorizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Authorizations'); ?></h3>
	<?php if (!empty($demoLink['Authorization'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Demo Link Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($demoLink['Authorization'] as $authorization): ?>
		<tr>
			<td><?php echo $authorization['id']; ?></td>
			<td><?php echo $authorization['user_id']; ?></td>
			<td><?php echo $authorization['demo_link_id']; ?></td>
			<td><?php echo $authorization['Name']; ?></td>
			<td><?php echo $authorization['Description']; ?></td>
			<td><?php echo $authorization['Active']; ?></td>
			<td><?php echo $authorization['Created']; ?></td>
			<td><?php echo $authorization['Updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'authorizations', 'action' => 'view', $authorization['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'authorizations', 'action' => 'edit', $authorization['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'authorizations', 'action' => 'delete', $authorization['id']), null, __('Are you sure you want to delete # %s?', $authorization['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Authorization'), array('controller' => 'authorizations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Campaigns'); ?></h3>
	<?php if (!empty($demoLink['Campaign'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Demo Link Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('StartDate'); ?></th>
		<th><?php echo __('EndDate'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($demoLink['Campaign'] as $campaign): ?>
		<tr>
			<td><?php echo $campaign['id']; ?></td>
			<td><?php echo $campaign['demo_link_id']; ?></td>
			<td><?php echo $campaign['Name']; ?></td>
			<td><?php echo $campaign['StartDate']; ?></td>
			<td><?php echo $campaign['EndDate']; ?></td>
			<td><?php echo $campaign['Active']; ?></td>
			<td><?php echo $campaign['Created']; ?></td>
			<td><?php echo $campaign['Updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'campaigns', 'action' => 'view', $campaign['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'campaigns', 'action' => 'edit', $campaign['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'campaigns', 'action' => 'delete', $campaign['id']), null, __('Are you sure you want to delete # %s?', $campaign['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
