<div class="vehiculos form">
<?php echo $this->Form->create('Vehiculo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vehiculo_tipo_id');
		echo $this->Form->input('modelo_veh');
		echo $this->Form->input('marca_veh');
		echo $this->Form->input('desc_veh');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vehiculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vehiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('controller' => 'vehiculo_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo Tipo'), array('controller' => 'vehiculo_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
	</ul>
</div>
