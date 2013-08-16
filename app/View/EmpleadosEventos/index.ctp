<div class="empleadosEventos index">
	<h2><?php echo __('Empleados Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('empleado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ini_ete'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ter_ete'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_ete'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empleadosEventos as $empleadosEvento): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($empleadosEvento['Empleado']['id'], array('controller' => 'empleados', 'action' => 'view', $empleadosEvento['Empleado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($empleadosEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $empleadosEvento['Evento']['id'])); ?>
		</td>
		<td><?php echo h($empleadosEvento['EmpleadosEvento']['id']); ?>&nbsp;</td>
		<td><?php echo h($empleadosEvento['EmpleadosEvento']['hora_ini_ete']); ?>&nbsp;</td>
		<td><?php echo h($empleadosEvento['EmpleadosEvento']['hora_ter_ete']); ?>&nbsp;</td>
		<td><?php echo h($empleadosEvento['EmpleadosEvento']['cargo_ete']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empleadosEvento['EmpleadosEvento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empleadosEvento['EmpleadosEvento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empleadosEvento['EmpleadosEvento']['id']), null, __('Are you sure you want to delete # %s?', $empleadosEvento['EmpleadosEvento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Empleados Evento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
