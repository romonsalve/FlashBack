<div class="proveedores form">
<?php echo $this->Form->create('Proveedore'); ?>
	<fieldset>
		<legend><?php echo __('Add Proveedore'); ?></legend>
	<?php
		echo $this->Form->input('nombre_pro');
		echo $this->Form->input('direccion_pro');
		echo $this->Form->input('fono_pro');
		echo $this->Form->input('correo_pro');
		echo $this->Form->input('ranking_pro');
		echo $this->Form->input('contrato_pro');
		echo $this->Form->input('nombre_conta');
		echo $this->Form->input('apellido_conta');
		echo $this->Form->input('correo_conta');
		echo $this->Form->input('fono_conta');
		echo $this->Form->input('RecursoTipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
