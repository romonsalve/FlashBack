<div class="propiedadesRecursos index">
	<h2><?php echo __('Propiedades Recursos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('recurso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('propiedade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_pro_rec'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($propiedadesRecursos as $propiedadesRecurso): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($propiedadesRecurso['Recurso']['id'], array('controller' => 'recursos', 'action' => 'view', $propiedadesRecurso['Recurso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propiedadesRecurso['Propiedade']['id'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecurso['Propiedade']['id'])); ?>
		</td>
		<td><?php echo h($propiedadesRecurso['PropiedadesRecurso']['id']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesRecurso['PropiedadesRecurso']['valor_pro_rec']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propiedadesRecurso['PropiedadesRecurso']['id']), null, __('Are you sure you want to delete # %s?', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Propiedades Recurso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
