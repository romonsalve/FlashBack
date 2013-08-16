<div class="recursosPorEventos form">
<?php echo $this->Form->create('RecursosPorEvento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recursos Por Evento'); ?></legend>
	<?php
		echo $this->Form->input('evento_id');
		echo $this->Form->input('recurso_id');
		echo $this->Form->input('id');
		echo $this->Form->input('cantidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RecursosPorEvento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RecursosPorEvento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos Por Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
