<div class="demoLinks index">
	<h2><?php echo __('Demo Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Active'); ?></th>
			<th><?php echo $this->Paginator->sort('Created'); ?></th>
			<th><?php echo $this->Paginator->sort('Updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($demoLinks as $demoLink): ?>
	<tr>
		<td><?php echo h($demoLink['DemoLink']['id']); ?>&nbsp;</td>
		<td><?php echo h($demoLink['DemoLink']['Name']); ?>&nbsp;</td>
		<td><?php echo h($demoLink['DemoLink']['Description']); ?>&nbsp;</td>
		<td><?php echo h($demoLink['DemoLink']['Active']); ?>&nbsp;</td>
		<td><?php echo h($demoLink['DemoLink']['Created']); ?>&nbsp;</td>
		<td><?php echo h($demoLink['DemoLink']['Updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $demoLink['DemoLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $demoLink['DemoLink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $demoLink['DemoLink']['id']), null, __('Are you sure you want to delete # %s?', $demoLink['DemoLink']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Demo Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Authorizations'), array('controller' => 'authorizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authorization'), array('controller' => 'authorizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
