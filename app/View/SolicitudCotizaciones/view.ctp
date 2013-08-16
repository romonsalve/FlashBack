<div class="solicitudCotizaciones view">
<h2><?php  echo __('Solicitud Cotizacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($solicitudCotizacione['SolicitudCotizacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudCotizacione['Estado']['id'], array('controller' => 'estados', 'action' => 'view', $solicitudCotizacione['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudCotizacione['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $solicitudCotizacione['EventoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudCotizacione['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $solicitudCotizacione['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recinto Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudCotizacione['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $solicitudCotizacione['RecintoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Cot'); ?></dt>
		<dd>
			<?php echo h($solicitudCotizacione['SolicitudCotizacione']['nombre_cot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Cot'); ?></dt>
		<dd>
			<?php echo h($solicitudCotizacione['SolicitudCotizacione']['desc_cot']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitud Cotizacione'), array('action' => 'edit', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitud Cotizacione'), array('action' => 'delete', $solicitudCotizacione['SolicitudCotizacione']['id']), null, __('Are you sure you want to delete # %s?', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participans'), array('controller' => 'participans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participan'), array('controller' => 'participans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Participans'); ?></h3>
	<?php if (!empty($solicitudCotizacione['Participan'])): ?>
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
		foreach ($solicitudCotizacione['Participan'] as $participan): ?>
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
