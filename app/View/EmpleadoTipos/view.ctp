<div class="empleadoTipos view">
<h2><?php  echo __('Empleado Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empleadoTipo['EmpleadoTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Empt'); ?></dt>
		<dd>
			<?php echo h($empleadoTipo['EmpleadoTipo']['nombre_empt']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleado Tipo'), array('action' => 'edit', $empleadoTipo['EmpleadoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleado Tipo'), array('action' => 'delete', $empleadoTipo['EmpleadoTipo']['id']), null, __('Are you sure you want to delete # %s?', $empleadoTipo['EmpleadoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Empleados'); ?></h3>
	<?php if (!empty($empleadoTipo['Empleado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empleado Tipo Id'); ?></th>
		<th><?php echo __('Nombre Emp'); ?></th>
		<th><?php echo __('Apellidom Emp'); ?></th>
		<th><?php echo __('Apellidop Emp'); ?></th>
		<th><?php echo __('Direccion Emp'); ?></th>
		<th><?php echo __('Fono Emp'); ?></th>
		<th><?php echo __('Correo Emp'); ?></th>
		<th><?php echo __('Contrato Emp'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleadoTipo['Empleado'] as $empleado): ?>
		<tr>
			<td><?php echo $empleado['id']; ?></td>
			<td><?php echo $empleado['empleado_tipo_id']; ?></td>
			<td><?php echo $empleado['nombre_emp']; ?></td>
			<td><?php echo $empleado['apellidom_emp']; ?></td>
			<td><?php echo $empleado['apellidop_emp']; ?></td>
			<td><?php echo $empleado['direccion_emp']; ?></td>
			<td><?php echo $empleado['fono_emp']; ?></td>
			<td><?php echo $empleado['correo_emp']; ?></td>
			<td><?php echo $empleado['contrato_emp']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empleados', 'action' => 'view', $empleado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empleados', 'action' => 'edit', $empleado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empleados', 'action' => 'delete', $empleado['id']), null, __('Are you sure you want to delete # %s?', $empleado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
