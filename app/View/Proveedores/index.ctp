<div class="proveedores index">
	<h2><?php echo __('Proveedores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_pro'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_pro'); ?></th>
			<th><?php echo $this->Paginator->sort('fono_pro'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_pro'); ?></th>
			<th><?php echo $this->Paginator->sort('ranking_pro'); ?></th>
			<th><?php echo $this->Paginator->sort('contrato_pro'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_conta'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_conta'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_conta'); ?></th>
			<th><?php echo $this->Paginator->sort('fono_conta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proveedores as $proveedore): ?>
	<tr>
		<td><?php echo h($proveedore['Proveedore']['id']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['nombre_pro']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['direccion_pro']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['fono_pro']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['correo_pro']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['ranking_pro']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['contrato_pro']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['nombre_conta']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['apellido_conta']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['correo_conta']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['fono_conta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proveedore['Proveedore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proveedore['Proveedore']['id']), null, __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proveedore'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
