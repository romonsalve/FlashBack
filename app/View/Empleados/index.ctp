<div class="empleados index">
	<h2><?php echo __('Empleados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('empleado_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_emp'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidom_emp'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidop_emp'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_emp'); ?></th>
			<th><?php echo $this->Paginator->sort('fono_emp'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_emp'); ?></th>
			<th><?php echo $this->Paginator->sort('contrato_emp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empleados as $empleado): ?>
	<tr>
		<td><?php echo h($empleado['Empleado']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empleado['EmpleadoTipo']['id'], array('controller' => 'empleado_tipos', 'action' => 'view', $empleado['EmpleadoTipo']['id'])); ?>
		</td>
		<td><?php echo h($empleado['Empleado']['nombre_emp']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['apellidom_emp']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['apellidop_emp']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['direccion_emp']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['fono_emp']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['correo_emp']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['contrato_emp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empleado['Empleado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empleado['Empleado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empleado['Empleado']['id']), null, __('Are you sure you want to delete # %s?', $empleado['Empleado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('controller' => 'empleado_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado Tipo'), array('controller' => 'empleado_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
