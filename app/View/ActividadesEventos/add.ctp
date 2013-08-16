<div class="actividadesEventos form">
<?php echo $this->Form->create('ActividadesEvento'); ?>
	<fieldset>
		<legend><?php echo __('Add Actividades Evento'); ?></legend>
	<?php
		echo $this->Form->input('evento_id');
		echo $this->Form->input('actividade_id');
		echo $this->Form->input('fecha_ini_act');
		echo $this->Form->input('fecha_ter_act');
		echo $this->Form->input('estado_act');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Actividades Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
