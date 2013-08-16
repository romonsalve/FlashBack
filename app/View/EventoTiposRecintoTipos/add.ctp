<div class="eventoTiposRecintoTipos form">
<?php echo $this->Form->create('EventoTiposRecintoTipo'); ?>
	<fieldset>
		<legend><?php echo __('Add Evento Tipos Recinto Tipo'); ?></legend>
	<?php
		echo $this->Form->input('recinto_tipo_id');
		echo $this->Form->input('evento_tipo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Evento Tipos Recinto Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
