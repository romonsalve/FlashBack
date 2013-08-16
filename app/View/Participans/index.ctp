<div class="participans index">
	<h2><?php echo __('Participans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('solicitud_cotizacione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('participante_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_par_sol'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($participans as $participan): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($participan['SolicitudCotizacione']['id'], array('controller' => 'solicitud_cotizaciones', 'action' => 'view', $participan['SolicitudCotizacione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participan['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participan['ParticipanteTipo']['id'])); ?>
		</td>
		<td><?php echo h($participan['Participan']['id']); ?>&nbsp;</td>
		<td><?php echo h($participan['Participan']['desc_par_sol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participan['Participan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participan['Participan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participan['Participan']['id']), null, __('Are you sure you want to delete # %s?', $participan['Participan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
