<div class="participanteTipos view">
<h2><?php  echo __('Participante Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participanteTipo['ParticipanteTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Part'); ?></dt>
		<dd>
			<?php echo h($participanteTipo['ParticipanteTipo']['nombre_part']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante Tipo'), array('action' => 'edit', $participanteTipo['ParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante Tipo'), array('action' => 'delete', $participanteTipo['ParticipanteTipo']['id']), null, __('Are you sure you want to delete # %s?', $participanteTipo['ParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participans'), array('controller' => 'participans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participan'), array('controller' => 'participans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Participantes'); ?></h3>
	<?php if (!empty($participanteTipo['Participante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Participante Tipo Id'); ?></th>
		<th><?php echo __('Nombre Cont Par'); ?></th>
		<th><?php echo __('Apellidom Cont Par'); ?></th>
		<th><?php echo __('Apellidop Cont Par'); ?></th>
		<th><?php echo __('Direccion Cont Par'); ?></th>
		<th><?php echo __('Fono Cont Par'); ?></th>
		<th><?php echo __('Correo Cont Par'); ?></th>
		<th><?php echo __('Contrato Par'); ?></th>
		<th><?php echo __('Ranking Par'); ?></th>
		<th><?php echo __('Nombre Artistico Par'); ?></th>
		<th><?php echo __('Desc Par'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($participanteTipo['Participante'] as $participante): ?>
		<tr>
			<td><?php echo $participante['id']; ?></td>
			<td><?php echo $participante['participante_tipo_id']; ?></td>
			<td><?php echo $participante['nombre_cont_par']; ?></td>
			<td><?php echo $participante['apellidom_cont_par']; ?></td>
			<td><?php echo $participante['apellidop_cont_par']; ?></td>
			<td><?php echo $participante['direccion_cont_par']; ?></td>
			<td><?php echo $participante['fono_cont_par']; ?></td>
			<td><?php echo $participante['correo_cont_par']; ?></td>
			<td><?php echo $participante['contrato_par']; ?></td>
			<td><?php echo $participante['ranking_par']; ?></td>
			<td><?php echo $participante['nombre_artistico_par']; ?></td>
			<td><?php echo $participante['desc_par']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participantes', 'action' => 'view', $participante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participantes', 'action' => 'edit', $participante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participantes', 'action' => 'delete', $participante['id']), null, __('Are you sure you want to delete # %s?', $participante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Participans'); ?></h3>
	<?php if (!empty($participanteTipo['Participan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Solicitud Cotizacione Id'); ?></th>
		<th><?php echo __('Participante Tipo Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Desc Par Sol'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($participanteTipo['Participan'] as $participan): ?>
		<tr>
			<td><?php echo $participan['solicitud_cotizacione_id']; ?></td>
			<td><?php echo $participan['participante_tipo_id']; ?></td>
			<td><?php echo $participan['id']; ?></td>
			<td><?php echo $participan['desc_par_sol']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participans', 'action' => 'view', $participan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participans', 'action' => 'edit', $participan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participans', 'action' => 'delete', $participan['id']), null, __('Are you sure you want to delete # %s?', $participan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participan'), array('controller' => 'participans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Evento Tipos'); ?></h3>
	<?php if (!empty($participanteTipo['EventoTipo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Evt'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($participanteTipo['EventoTipo'] as $eventoTipo): ?>
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
