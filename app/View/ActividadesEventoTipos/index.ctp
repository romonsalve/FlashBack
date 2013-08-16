<div class="actividadesEventoTipos index">
	<h2><?php echo __('Actividades Evento Tipos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('evento_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('actividade_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividadesEventoTipos as $actividadesEventoTipo): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($actividadesEventoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $actividadesEventoTipo['EventoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($actividadesEventoTipo['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesEventoTipo['Actividade']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actividadesEventoTipo['ActividadesEventoTipo']['id']), null, __('Are you sure you want to delete # %s?', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Actividades Evento Tipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
