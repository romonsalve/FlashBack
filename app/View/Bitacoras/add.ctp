<div class="bitacoras form">
<?php echo $this->Form->create('Bitacora'); ?>
	<fieldset>
		<legend><?php echo __('Add Bitacora'); ?></legend>
	<?php
		echo $this->Form->input('evento_id');
		echo $this->Form->input('vehiculo_id');
		echo $this->Form->input('hora_ini_bit');
		echo $this->Form->input('hora_ter_bit');
		echo $this->Form->input('desc_bit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
