<div class="empleadoTipos form">
<?php echo $this->Form->create('EmpleadoTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Empleado Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_empt');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmpleadoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmpleadoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
	</ul>
</div>
