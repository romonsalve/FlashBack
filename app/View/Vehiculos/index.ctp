<div class="vehiculos index">
	<h2><?php echo __('Vehiculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vehiculo_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo_veh'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_veh'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_veh'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vehiculos as $vehiculo): ?>
	<tr>
		<td><?php echo h($vehiculo['Vehiculo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehiculo['VehiculoTipo']['id'], array('controller' => 'vehiculo_tipos', 'action' => 'view', $vehiculo['VehiculoTipo']['id'])); ?>
		</td>
		<td><?php echo h($vehiculo['Vehiculo']['modelo_veh']); ?>&nbsp;</td>
		<td><?php echo h($vehiculo['Vehiculo']['marca_veh']); ?>&nbsp;</td>
		<td><?php echo h($vehiculo['Vehiculo']['desc_veh']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehiculo['Vehiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehiculo['Vehiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehiculo['Vehiculo']['id']), null, __('Are you sure you want to delete # %s?', $vehiculo['Vehiculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('controller' => 'vehiculo_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo Tipo'), array('controller' => 'vehiculo_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
	</ul>
</div>
