<div class="empleados form">
<?php echo $this->Form->create('Empleado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Empleado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('empleado_tipo_id');
		echo $this->Form->input('nombre_emp');
		echo $this->Form->input('apellidom_emp');
		echo $this->Form->input('apellidop_emp');
		echo $this->Form->input('direccion_emp');
		echo $this->Form->input('fono_emp');
		echo $this->Form->input('correo_emp');
		echo $this->Form->input('contrato_emp');
		echo $this->Form->input('Evento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Empleado.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Empleado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('controller' => 'empleado_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado Tipo'), array('controller' => 'empleado_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
