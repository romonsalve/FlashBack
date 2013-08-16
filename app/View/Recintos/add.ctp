<div class="recintos form">
<?php echo $this->Form->create('Recinto'); ?>
	<fieldset>
		<legend><?php echo __('Add Recinto'); ?></legend>
	<?php
		echo $this->Form->input('recinto_tipo_id');
		echo $this->Form->input('nombre_reci');
		echo $this->Form->input('mapa_reci');
		echo $this->Form->input('dimension_reci');
		echo $this->Form->input('ubicacion_reci');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recintos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
