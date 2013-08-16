<div class="eventoTiposParticipanteTipos form">
<?php echo $this->Form->create('EventoTiposParticipanteTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evento Tipos Participante Tipo'); ?></legend>
	<?php
		echo $this->Form->input('evento_tipo_id');
		echo $this->Form->input('participante_tipo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventoTiposParticipanteTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EventoTiposParticipanteTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Participante Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
