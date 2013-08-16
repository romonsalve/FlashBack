<div class="solicitudCotizaciones index">
	<h2><?php echo __('Solicitud Cotizaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('recinto_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_cot'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_cot'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($solicitudCotizaciones as $solicitudCotizacione): ?>
	<tr>
		<td><?php echo h($solicitudCotizacione['SolicitudCotizacione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['Estado']['id'], array('controller' => 'estados', 'action' => 'view', $solicitudCotizacione['Estado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $solicitudCotizacione['EventoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $solicitudCotizacione['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $solicitudCotizacione['RecintoTipo']['id'])); ?>
		</td>
		<td><?php echo h($solicitudCotizacione['SolicitudCotizacione']['nombre_cot']); ?>&nbsp;</td>
		<td><?php echo h($solicitudCotizacione['SolicitudCotizacione']['desc_cot']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $solicitudCotizacione['SolicitudCotizacione']['id']), null, __('Are you sure you want to delete # %s?', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('action' => 'add')); ?></li>
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
