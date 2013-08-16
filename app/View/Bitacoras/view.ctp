<div class="bitacoras view">
<h2><?php  echo __('Bitacora'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bitacora['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $bitacora['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bitacora['Vehiculo']['id'], array('controller' => 'vehiculos', 'action' => 'view', $bitacora['Vehiculo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Ini Bit'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['hora_ini_bit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Ter Bit'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['hora_ter_bit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Bit'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['desc_bit']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bitacora'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bitacora'), array('action' => 'delete', $bitacora['Bitacora']['id']), null, __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
