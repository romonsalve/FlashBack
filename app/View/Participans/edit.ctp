<div class="participans form">
<?php echo $this->Form->create('Participan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Participan'); ?></legend>
	<?php
		echo $this->Form->input('solicitud_cotizacione_id');
		echo $this->Form->input('participante_tipo_id');
		echo $this->Form->input('id');
		echo $this->Form->input('desc_par_sol');
		echo $this->Form->input('EventoTipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Participan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Participan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
