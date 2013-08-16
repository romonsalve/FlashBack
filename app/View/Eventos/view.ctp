<div class="eventos view">
<h2><?php  echo __('Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recinto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evento['Recinto']['id'], array('controller' => 'recintos', 'action' => 'view', $evento['Recinto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evento['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $evento['EventoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evento['EstadoEvento']['id'], array('controller' => 'estado_eventos', 'action' => 'view', $evento['EstadoEvento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evento['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $evento['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Evento'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['nombre_evento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Evento'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['descripcion_evento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha De Inicio'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['fecha_de_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha De Termino'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['fecha_de_termino']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Evento'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['precio_evento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lista Invitados'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['lista_invitados']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento'), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento'), array('action' => 'delete', $evento['Evento']['id']), null, __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('controller' => 'recintos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto'), array('controller' => 'recintos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Eventos'), array('controller' => 'estado_eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Evento'), array('controller' => 'estado_eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos Por Eventos'), array('controller' => 'recursos_por_eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursos Por Evento'), array('controller' => 'recursos_por_eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('controller' => 'itinerario_participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('controller' => 'itinerario_participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bitacoras'); ?></h3>
	<?php if (!empty($evento['Bitacora'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Vehiculo Id'); ?></th>
		<th><?php echo __('Hora Ini Bit'); ?></th>
		<th><?php echo __('Hora Ter Bit'); ?></th>
		<th><?php echo __('Desc Bit'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Bitacora'] as $bitacora): ?>
		<tr>
			<td><?php echo $bitacora['id']; ?></td>
			<td><?php echo $bitacora['evento_id']; ?></td>
			<td><?php echo $bitacora['vehiculo_id']; ?></td>
			<td><?php echo $bitacora['hora_ini_bit']; ?></td>
			<td><?php echo $bitacora['hora_ter_bit']; ?></td>
			<td><?php echo $bitacora['desc_bit']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bitacoras', 'action' => 'view', $bitacora['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bitacoras', 'action' => 'edit', $bitacora['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bitacoras', 'action' => 'delete', $bitacora['id']), null, __('Are you sure you want to delete # %s?', $bitacora['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Recursos Por Eventos'); ?></h3>
	<?php if (!empty($evento['RecursosPorEvento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Recurso Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['RecursosPorEvento'] as $recursosPorEvento): ?>
		<tr>
			<td><?php echo $recursosPorEvento['evento_id']; ?></td>
			<td><?php echo $recursosPorEvento['recurso_id']; ?></td>
			<td><?php echo $recursosPorEvento['id']; ?></td>
			<td><?php echo $recursosPorEvento['cantidad']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recursos_por_eventos', 'action' => 'view', $recursosPorEvento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recursos_por_eventos', 'action' => 'edit', $recursosPorEvento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recursos_por_eventos', 'action' => 'delete', $recursosPorEvento['id']), null, __('Are you sure you want to delete # %s?', $recursosPorEvento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recursos Por Evento'), array('controller' => 'recursos_por_eventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Itinerario Participantes'); ?></h3>
	<?php if (!empty($evento['ItinerarioParticipante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Participante Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hora Ini Par'); ?></th>
		<th><?php echo __('Hora Ter Par'); ?></th>
		<th><?php echo __('Desc Iti Par'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['ItinerarioParticipante'] as $itinerarioParticipante): ?>
		<tr>
			<td><?php echo $itinerarioParticipante['participante_id']; ?></td>
			<td><?php echo $itinerarioParticipante['evento_id']; ?></td>
			<td><?php echo $itinerarioParticipante['id']; ?></td>
			<td><?php echo $itinerarioParticipante['hora_ini_par']; ?></td>
			<td><?php echo $itinerarioParticipante['hora_ter_par']; ?></td>
			<td><?php echo $itinerarioParticipante['desc_iti_par']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itinerario_participantes', 'action' => 'view', $itinerarioParticipante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itinerario_participantes', 'action' => 'edit', $itinerarioParticipante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itinerario_participantes', 'action' => 'delete', $itinerarioParticipante['id']), null, __('Are you sure you want to delete # %s?', $itinerarioParticipante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('controller' => 'itinerario_participantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Empleados'); ?></h3>
	<?php if (!empty($evento['Empleado'])): ?>
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
		foreach ($evento['Empleado'] as $empleado): ?>
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
<div class="related">
	<h3><?php echo __('Related Actividades'); ?></h3>
	<?php if (!empty($evento['Actividade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Desc Act'); ?></th>
		<th><?php echo __('Nombre Act'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Actividade'] as $actividade): ?>
		<tr>
			<td><?php echo $actividade['id']; ?></td>
			<td><?php echo $actividade['desc_act']; ?></td>
			<td><?php echo $actividade['nombre_act']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actividades', 'action' => 'view', $actividade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actividades', 'action' => 'edit', $actividade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actividades', 'action' => 'delete', $actividade['id']), null, __('Are you sure you want to delete # %s?', $actividade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
