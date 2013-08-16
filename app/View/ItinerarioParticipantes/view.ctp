<div class="itinerarioParticipantes view">
<h2><?php  echo __('Itinerario Participante'); ?></h2>
	<dl>
		<dt><?php echo __('Participante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itinerarioParticipante['Participante']['id'], array('controller' => 'participantes', 'action' => 'view', $itinerarioParticipante['Participante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itinerarioParticipante['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $itinerarioParticipante['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itinerarioParticipante['ItinerarioParticipante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Ini Par'); ?></dt>
		<dd>
			<?php echo h($itinerarioParticipante['ItinerarioParticipante']['hora_ini_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Ter Par'); ?></dt>
		<dd>
			<?php echo h($itinerarioParticipante['ItinerarioParticipante']['hora_ter_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Iti Par'); ?></dt>
		<dd>
			<?php echo h($itinerarioParticipante['ItinerarioParticipante']['desc_iti_par']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itinerario Participante'), array('action' => 'edit', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itinerario Participante'), array('action' => 'delete', $itinerarioParticipante['ItinerarioParticipante']['id']), null, __('Are you sure you want to delete # %s?', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
