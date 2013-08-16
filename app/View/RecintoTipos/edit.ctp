<div class="recintoTipos form">
<?php echo $this->Form->create('RecintoTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recinto Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_recit');
		echo $this->Form->input('EventoTipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RecintoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RecintoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('controller' => 'recintos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto'), array('controller' => 'recintos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
