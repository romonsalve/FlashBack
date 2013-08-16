<div class="auditoria form">
<?php echo $this->Form->create('Auditorium'); ?>
	<fieldset>
		<legend><?php echo __('Edit Auditorium'); ?></legend>
	<?php
		echo $this->Form->input('id_audit');
		echo $this->Form->input('nombre_tabla_audit');
		echo $this->Form->input('operacion_audit');
		echo $this->Form->input('valor_antiguo');
		echo $this->Form->input('valor_nuevo');
		echo $this->Form->input('hora');
		echo $this->Form->input('usuario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Auditorium.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Auditorium.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Auditoria'), array('action' => 'index')); ?></li>
	</ul>
</div>
