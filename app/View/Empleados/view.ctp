<div class="empleados view">
<h2><?php  echo __('Empleado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empleado Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empleado['EmpleadoTipo']['id'], array('controller' => 'empleado_tipos', 'action' => 'view', $empleado['EmpleadoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Emp'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['nombre_emp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidom Emp'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['apellidom_emp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidop Emp'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['apellidop_emp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Emp'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['direccion_emp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fono Emp'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['fono_emp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Emp'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['correo_emp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contrato Emp'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['contrato_emp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleado'), array('action' => 'edit', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleado'), array('action' => 'delete', $empleado['Empleado']['id']), null, __('Are you sure you want to delete # %s?', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('controller' => 'empleado_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado Tipo'), array('controller' => 'empleado_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Eventos'); ?></h3>
	<?php if (!empty($empleado['Evento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Recinto Id'); ?></th>
		<th><?php echo __('Evento Tipo Id'); ?></th>
		<th><?php echo __('Estado Evento Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Nombre Evento'); ?></th>
		<th><?php echo __('Descripcion Evento'); ?></th>
		<th><?php echo __('Fecha De Inicio'); ?></th>
		<th><?php echo __('Fecha De Termino'); ?></th>
		<th><?php echo __('Precio Evento'); ?></th>
		<th><?php echo __('Lista Invitados'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['id']; ?></td>
			<td><?php echo $evento['recinto_id']; ?></td>
			<td><?php echo $evento['evento_tipo_id']; ?></td>
			<td><?php echo $evento['estado_evento_id']; ?></td>
			<td><?php echo $evento['cliente_id']; ?></td>
			<td><?php echo $evento['nombre_evento']; ?></td>
			<td><?php echo $evento['descripcion_evento']; ?></td>
			<td><?php echo $evento['fecha_de_inicio']; ?></td>
			<td><?php echo $evento['fecha_de_termino']; ?></td>
			<td><?php echo $evento['precio_evento']; ?></td>
			<td><?php echo $evento['lista_invitados']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'eventos', 'action' => 'edit', $evento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'eventos', 'action' => 'delete', $evento['id']), null, __('Are you sure you want to delete # %s?', $evento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
