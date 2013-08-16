<div class="participanteTipos form">
<?php echo $this->Form->create('ParticipanteTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Participante Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_part');
		echo $this->Form->input('EventoTipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ParticipanteTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ParticipanteTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participans'), array('controller' => 'participans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participan'), array('controller' => 'participans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
