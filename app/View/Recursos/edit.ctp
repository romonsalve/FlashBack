<div class="recursos form">
<?php echo $this->Form->create('Recurso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recurso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('recurso_tipo_id');
		echo $this->Form->input('proveedore_id');
		echo $this->Form->input('cantidad_rec');
		echo $this->Form->input('Propiedade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recurso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recurso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
