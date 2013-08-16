<div class="participans view">
<h2><?php  echo __('Participan'); ?></h2>
	<dl>
		<dt><?php echo __('Solicitud Cotizacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participan['SolicitudCotizacione']['id'], array('controller' => 'solicitud_cotizaciones', 'action' => 'view', $participan['SolicitudCotizacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participante Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participan['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participan['ParticipanteTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participan['Participan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Par Sol'); ?></dt>
		<dd>
			<?php echo h($participan['Participan']['desc_par_sol']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participan'), array('action' => 'edit', $participan['Participan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participan'), array('action' => 'delete', $participan['Participan']['id']), null, __('Are you sure you want to delete # %s?', $participan['Participan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Evento Tipos'); ?></h3>
	<?php if (!empty($participan['EventoTipo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Evt'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($participan['EventoTipo'] as $eventoTipo): ?>
		<tr>
			<td><?php echo $eventoTipo['id']; ?></td>
			<td><?php echo $eventoTipo['nombre_evt']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'evento_tipos', 'action' => 'view', $eventoTipo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'evento_tipos', 'action' => 'edit', $eventoTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'evento_tipos', 'action' => 'delete', $eventoTipo['id']), null, __('Are you sure you want to delete # %s?', $eventoTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
