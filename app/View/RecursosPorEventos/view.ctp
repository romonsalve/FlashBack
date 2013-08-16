<div class="recursosPorEventos view">
<h2><?php  echo __('Recursos Por Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recursosPorEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $recursosPorEvento['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recurso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recursosPorEvento['Recurso']['id'], array('controller' => 'recursos', 'action' => 'view', $recursosPorEvento['Recurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recursosPorEvento['RecursosPorEvento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($recursosPorEvento['RecursosPorEvento']['cantidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recursos Por Evento'), array('action' => 'edit', $recursosPorEvento['RecursosPorEvento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recursos Por Evento'), array('action' => 'delete', $recursosPorEvento['RecursosPorEvento']['id']), null, __('Are you sure you want to delete # %s?', $recursosPorEvento['RecursosPorEvento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos Por Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursos Por Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
