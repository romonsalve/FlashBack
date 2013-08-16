<div class="recintos index">
	<h2><?php echo __('Recintos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('recinto_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_reci'); ?></th>
			<th><?php echo $this->Paginator->sort('mapa_reci'); ?></th>
			<th><?php echo $this->Paginator->sort('dimension_reci'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_reci'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recintos as $recinto): ?>
	<tr>
		<td><?php echo h($recinto['Recinto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recinto['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $recinto['RecintoTipo']['id'])); ?>
		</td>
		<td><?php echo h($recinto['Recinto']['nombre_reci']); ?>&nbsp;</td>
		<td><?php echo h($recinto['Recinto']['mapa_reci']); ?>&nbsp;</td>
		<td><?php echo h($recinto['Recinto']['dimension_reci']); ?>&nbsp;</td>
		<td><?php echo h($recinto['Recinto']['ubicacion_reci']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recinto['Recinto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recinto['Recinto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recinto['Recinto']['id']), null, __('Are you sure you want to delete # %s?', $recinto['Recinto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Recinto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
