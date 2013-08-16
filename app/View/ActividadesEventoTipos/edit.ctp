<div class="actividadesEventoTipos form">
<?php echo $this->Form->create('ActividadesEventoTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Actividades Evento Tipo'); ?></legend>
	<?php
		echo $this->Form->input('evento_tipo_id');
		echo $this->Form->input('actividade_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActividadesEventoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ActividadesEventoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades Evento Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
