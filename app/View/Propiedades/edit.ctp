<div class="propiedades form">
<?php echo $this->Form->create('Propiedade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Propiedade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_prop');
		echo $this->Form->input('RecursoTipo');
		echo $this->Form->input('Medida');
		echo $this->Form->input('Recurso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Propiedade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Propiedade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
