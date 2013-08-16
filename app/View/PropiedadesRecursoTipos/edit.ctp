<div class="propiedadesRecursoTipos form">
<?php echo $this->Form->create('PropiedadesRecursoTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Propiedades Recurso Tipo'); ?></legend>
	<?php
		echo $this->Form->input('propiedade_id');
		echo $this->Form->input('recurso_tipo_id');
		echo $this->Form->input('id');
		echo $this->Form->input('max_rango_prop_tip');
		echo $this->Form->input('min_rango_prop_tip');
		echo $this->Form->input('medida_prop_tip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PropiedadesRecursoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PropiedadesRecursoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Propiedades Recurso Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
