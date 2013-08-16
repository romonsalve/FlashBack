<div class="itinerarioParticipantes index">
	<h2><?php echo __('Itinerario Participantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('participante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ini_par'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ter_par'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_iti_par'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itinerarioParticipantes as $itinerarioParticipante): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($itinerarioParticipante['Participante']['id'], array('controller' => 'participantes', 'action' => 'view', $itinerarioParticipante['Participante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itinerarioParticipante['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $itinerarioParticipante['Evento']['id'])); ?>
		</td>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['id']); ?>&nbsp;</td>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['hora_ini_par']); ?>&nbsp;</td>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['hora_ter_par']); ?>&nbsp;</td>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['desc_iti_par']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itinerarioParticipante['ItinerarioParticipante']['id']), null, __('Are you sure you want to delete # %s?', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
