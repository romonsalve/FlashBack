<div class="eventos index">
	<h2><?php echo __('Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('recinto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_evento'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion_evento'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_de_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_de_termino'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_evento'); ?></th>
			<th><?php echo $this->Paginator->sort('lista_invitados'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($eventos as $evento): ?>
	<tr>
		<td><?php echo h($evento['Evento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['Recinto']['id'], array('controller' => 'recintos', 'action' => 'view', $evento['Recinto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evento['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $evento['EventoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evento['EstadoEvento']['id'], array('controller' => 'estado_eventos', 'action' => 'view', $evento['EstadoEvento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evento['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $evento['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($evento['Evento']['nombre_evento']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['descripcion_evento']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['fecha_de_inicio']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['fecha_de_termino']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['precio_evento']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['lista_invitados']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evento['Evento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evento['Evento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evento['Evento']['id']), null, __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?></li>
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
