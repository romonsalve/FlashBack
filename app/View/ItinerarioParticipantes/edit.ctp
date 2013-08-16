<div class="itinerarioParticipantes form">
<?php echo $this->Form->create('ItinerarioParticipante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Itinerario Participante'); ?></legend>
	<?php
		echo $this->Form->input('participante_id');
		echo $this->Form->input('evento_id');
		echo $this->Form->input('id');
		echo $this->Form->input('hora_ini_par');
		echo $this->Form->input('hora_ter_par');
		echo $this->Form->input('desc_iti_par');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItinerarioParticipante.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ItinerarioParticipante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
