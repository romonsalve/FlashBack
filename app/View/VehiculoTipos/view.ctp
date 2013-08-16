<div class="vehiculoTipos view">
<h2><?php  echo __('Vehiculo Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehiculoTipo['VehiculoTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Veht'); ?></dt>
		<dd>
			<?php echo h($vehiculoTipo['VehiculoTipo']['nombre_veht']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehiculo Tipo'), array('action' => 'edit', $vehiculoTipo['VehiculoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehiculo Tipo'), array('action' => 'delete', $vehiculoTipo['VehiculoTipo']['id']), null, __('Are you sure you want to delete # %s?', $vehiculoTipo['VehiculoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Vehiculos'); ?></h3>
	<?php if (!empty($vehiculoTipo['Vehiculo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vehiculo Tipo Id'); ?></th>
		<th><?php echo __('Modelo Veh'); ?></th>
		<th><?php echo __('Marca Veh'); ?></th>
		<th><?php echo __('Desc Veh'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehiculoTipo['Vehiculo'] as $vehiculo): ?>
		<tr>
			<td><?php echo $vehiculo['id']; ?></td>
			<td><?php echo $vehiculo['vehiculo_tipo_id']; ?></td>
			<td><?php echo $vehiculo['modelo_veh']; ?></td>
			<td><?php echo $vehiculo['marca_veh']; ?></td>
			<td><?php echo $vehiculo['desc_veh']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehiculos', 'action' => 'view', $vehiculo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehiculos', 'action' => 'edit', $vehiculo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehiculos', 'action' => 'delete', $vehiculo['id']), null, __('Are you sure you want to delete # %s?', $vehiculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
