<div class="empleadosEventos form">
<?php echo $this->Form->create('EmpleadosEvento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Empleados Evento'); ?></legend>
	<?php
		echo $this->Form->input('empleado_id');
		echo $this->Form->input('evento_id');
		echo $this->Form->input('id');
		echo $this->Form->input('hora_ini_ete');
		echo $this->Form->input('hora_ter_ete');
		echo $this->Form->input('cargo_ete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmpleadosEvento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmpleadosEvento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
