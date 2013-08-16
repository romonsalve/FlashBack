<div class="eventoTiposParticipanteTipos index">
	<h2><?php echo __('Evento Tipos Participante Tipos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('evento_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('participante_tipo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($eventoTiposParticipanteTipos as $eventoTiposParticipanteTipo): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($eventoTiposParticipanteTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposParticipanteTipo['EventoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eventoTiposParticipanteTipo['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $eventoTiposParticipanteTipo['ParticipanteTipo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evento Tipos Participante Tipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
