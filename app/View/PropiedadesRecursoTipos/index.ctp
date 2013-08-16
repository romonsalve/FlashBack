<div class="propiedadesRecursoTipos index">
	<h2><?php echo __('Propiedades Recurso Tipos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('propiedade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('recurso_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('max_rango_prop_tip'); ?></th>
			<th><?php echo $this->Paginator->sort('min_rango_prop_tip'); ?></th>
			<th><?php echo $this->Paginator->sort('medida_prop_tip'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($propiedadesRecursoTipos as $propiedadesRecursoTipo): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($propiedadesRecursoTipo['Propiedade']['id'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecursoTipo['Propiedade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propiedadesRecursoTipo['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $propiedadesRecursoTipo['RecursoTipo']['id'])); ?>
		</td>
		<td><?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['max_rango_prop_tip']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['min_rango_prop_tip']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['medida_prop_tip']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Propiedades Recurso Tipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
