<div class="medidasPropiedades index">
	<h2><?php echo __('Medidas Propiedades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('medida_id'); ?></th>
			<th><?php echo $this->Paginator->sort('propiedade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($medidasPropiedades as $medidasPropiedade): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($medidasPropiedade['Medida']['id'], array('controller' => 'medidas', 'action' => 'view', $medidasPropiedade['Medida']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($medidasPropiedade['Propiedade']['id'], array('controller' => 'propiedades', 'action' => 'view', $medidasPropiedade['Propiedade']['id'])); ?>
		</td>
		<td><?php echo h($medidasPropiedade['MedidasPropiedade']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $medidasPropiedade['MedidasPropiedade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $medidasPropiedade['MedidasPropiedade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $medidasPropiedade['MedidasPropiedade']['id']), null, __('Are you sure you want to delete # %s?', $medidasPropiedade['MedidasPropiedade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Medidas Propiedade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
