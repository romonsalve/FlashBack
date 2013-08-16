<div class="recursos index">
	<h2><?php echo __('Recursos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('recurso_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proveedore_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_rec'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recursos as $recurso): ?>
	<tr>
		<td><?php echo h($recurso['Recurso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recurso['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $recurso['RecursoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recurso['Proveedore']['id'], array('controller' => 'proveedores', 'action' => 'view', $recurso['Proveedore']['id'])); ?>
		</td>
		<td><?php echo h($recurso['Recurso']['cantidad_rec']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recurso['Recurso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recurso['Recurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recurso['Recurso']['id']), null, __('Are you sure you want to delete # %s?', $recurso['Recurso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Recurso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
