<div class="eventoTiposParticipanteTipos view">
<h2><?php  echo __('Evento Tipos Participante Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Evento Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventoTiposParticipanteTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposParticipanteTipo['EventoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participante Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventoTiposParticipanteTipo['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $eventoTiposParticipanteTipo['ParticipanteTipo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento Tipos Participante Tipo'), array('action' => 'edit', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento Tipos Participante Tipo'), array('action' => 'delete', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Participante Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipos Participante Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
