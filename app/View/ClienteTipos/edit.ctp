<div class="clienteTipos form">
<?php echo $this->Form->create('ClienteTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_cli_tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClienteTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClienteTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
