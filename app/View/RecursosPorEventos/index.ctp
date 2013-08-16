<div class="recursosPorEventos index">
	<h2><?php echo __('Recursos Por Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('recurso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recursosPorEventos as $recursosPorEvento): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($recursosPorEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $recursosPorEvento['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recursosPorEvento['Recurso']['id'], array('controller' => 'recursos', 'action' => 'view', $recursosPorEvento['Recurso']['id'])); ?>
		</td>
		<td><?php echo h($recursosPorEvento['RecursosPorEvento']['id']); ?>&nbsp;</td>
		<td><?php echo h($recursosPorEvento['RecursosPorEvento']['cantidad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recursosPorEvento['RecursosPorEvento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recursosPorEvento['RecursosPorEvento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recursosPorEvento['RecursosPorEvento']['id']), null, __('Are you sure you want to delete # %s?', $recursosPorEvento['RecursosPorEvento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Recursos Por Evento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
