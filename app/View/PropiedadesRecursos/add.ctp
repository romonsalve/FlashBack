<div class="propiedadesRecursos form">
<?php echo $this->Form->create('PropiedadesRecurso'); ?>
	<fieldset>
		<legend><?php echo __('Add Propiedades Recurso'); ?></legend>
	<?php
		echo $this->Form->input('recurso_id');
		echo $this->Form->input('propiedade_id');
		echo $this->Form->input('valor_pro_rec');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Propiedades Recursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
