<div class="empleadosEventos view">
<h2><?php  echo __('Empleados Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Empleado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empleadosEvento['Empleado']['id'], array('controller' => 'empleados', 'action' => 'view', $empleadosEvento['Empleado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empleadosEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $empleadosEvento['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empleadosEvento['EmpleadosEvento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Ini Ete'); ?></dt>
		<dd>
			<?php echo h($empleadosEvento['EmpleadosEvento']['hora_ini_ete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Ter Ete'); ?></dt>
		<dd>
			<?php echo h($empleadosEvento['EmpleadosEvento']['hora_ter_ete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo Ete'); ?></dt>
		<dd>
			<?php echo h($empleadosEvento['EmpleadosEvento']['cargo_ete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleados Evento'), array('action' => 'edit', $empleadosEvento['EmpleadosEvento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleados Evento'), array('action' => 'delete', $empleadosEvento['EmpleadosEvento']['id']), null, __('Are you sure you want to delete # %s?', $empleadosEvento['EmpleadosEvento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleados Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
