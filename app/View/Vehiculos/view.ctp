<div class="vehiculos view">
<h2><?php  echo __('Vehiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehiculo['Vehiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehiculo Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehiculo['VehiculoTipo']['id'], array('controller' => 'vehiculo_tipos', 'action' => 'view', $vehiculo['VehiculoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo Veh'); ?></dt>
		<dd>
			<?php echo h($vehiculo['Vehiculo']['modelo_veh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca Veh'); ?></dt>
		<dd>
			<?php echo h($vehiculo['Vehiculo']['marca_veh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Veh'); ?></dt>
		<dd>
			<?php echo h($vehiculo['Vehiculo']['desc_veh']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehiculo'), array('action' => 'edit', $vehiculo['Vehiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehiculo'), array('action' => 'delete', $vehiculo['Vehiculo']['id']), null, __('Are you sure you want to delete # %s?', $vehiculo['Vehiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('controller' => 'vehiculo_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo Tipo'), array('controller' => 'vehiculo_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bitacoras'); ?></h3>
	<?php if (!empty($vehiculo['Bitacora'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Vehiculo Id'); ?></th>
		<th><?php echo __('Hora Ini Bit'); ?></th>
		<th><?php echo __('Hora Ter Bit'); ?></th>
		<th><?php echo __('Desc Bit'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehiculo['Bitacora'] as $bitacora): ?>
		<tr>
			<td><?php echo $bitacora['id']; ?></td>
			<td><?php echo $bitacora['evento_id']; ?></td>
			<td><?php echo $bitacora['vehiculo_id']; ?></td>
			<td><?php echo $bitacora['hora_ini_bit']; ?></td>
			<td><?php echo $bitacora['hora_ter_bit']; ?></td>
			<td><?php echo $bitacora['desc_bit']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bitacoras', 'action' => 'view', $bitacora['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bitacoras', 'action' => 'edit', $bitacora['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bitacoras', 'action' => 'delete', $bitacora['id']), null, __('Are you sure you want to delete # %s?', $bitacora['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
