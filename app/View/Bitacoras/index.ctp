<div class="bitacoras index">
	<h2><?php echo __('Bitacoras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vehiculo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ini_bit'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ter_bit'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_bit'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bitacoras as $bitacora): ?>
	<tr>
		<td><?php echo h($bitacora['Bitacora']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bitacora['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $bitacora['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bitacora['Vehiculo']['id'], array('controller' => 'vehiculos', 'action' => 'view', $bitacora['Vehiculo']['id'])); ?>
		</td>
		<td><?php echo h($bitacora['Bitacora']['hora_ini_bit']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['hora_ter_bit']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['desc_bit']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bitacora['Bitacora']['id']), null, __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
