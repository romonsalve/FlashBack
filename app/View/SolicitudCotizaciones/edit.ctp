<div class="solicitudCotizaciones form">
<?php echo $this->Form->create('SolicitudCotizacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Solicitud Cotizacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('evento_tipo_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('recinto_tipo_id');
		echo $this->Form->input('nombre_cot');
		echo $this->Form->input('desc_cot');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SolicitudCotizacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SolicitudCotizacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('action' => 'index')); ?></li>
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
