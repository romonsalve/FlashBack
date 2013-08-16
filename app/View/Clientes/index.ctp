<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_cli'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidom_cli'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidop_cli'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_cli'); ?></th>
			<th><?php echo $this->Paginator->sort('fono_cli'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_cli'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['ClienteTipo']['id'], array('controller' => 'cliente_tipos', 'action' => 'view', $cliente['ClienteTipo']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['nombre_cli']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellidom_cli']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellidop_cli']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['direccion_cli']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['fono_cli']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['correo_cli']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('controller' => 'cliente_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Tipo'), array('controller' => 'cliente_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
