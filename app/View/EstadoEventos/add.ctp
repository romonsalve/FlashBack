<div class="estadoEventos form">
<?php echo $this->Form->create('EstadoEvento'); ?>
	<fieldset>
		<legend><?php echo __('Add Estado Evento'); ?></legend>
	<?php
		echo $this->Form->input('nombre_estado_evt');
		echo $this->Form->input('desc_estado_evt');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estado Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
