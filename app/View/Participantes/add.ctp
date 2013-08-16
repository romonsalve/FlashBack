<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Add Participante'); ?></legend>
	<?php
		echo $this->Form->input('participante_tipo_id');
		echo $this->Form->input('nombre_cont_par');
		echo $this->Form->input('apellidom_cont_par');
		echo $this->Form->input('apellidop_cont_par');
		echo $this->Form->input('direccion_cont_par');
		echo $this->Form->input('fono_cont_par');
		echo $this->Form->input('correo_cont_par');
		echo $this->Form->input('contrato_par');
		echo $this->Form->input('ranking_par');
		echo $this->Form->input('nombre_artistico_par');
		echo $this->Form->input('desc_par');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
