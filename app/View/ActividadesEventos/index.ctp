<div class="actividadesEventos index">
	<h2><?php echo __('Actividades Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('actividade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ini_act'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ter_act'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_act'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividadesEventos as $actividadesEvento): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($actividadesEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $actividadesEvento['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($actividadesEvento['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesEvento['Actividade']['id'])); ?>
		</td>
		<td><?php echo h($actividadesEvento['ActividadesEvento']['id']); ?>&nbsp;</td>
		<td><?php echo h($actividadesEvento['ActividadesEvento']['fecha_ini_act']); ?>&nbsp;</td>
		<td><?php echo h($actividadesEvento['ActividadesEvento']['fecha_ter_act']); ?>&nbsp;</td>
		<td><?php echo h($actividadesEvento['ActividadesEvento']['estado_act']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actividadesEvento['ActividadesEvento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actividadesEvento['ActividadesEvento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actividadesEvento['ActividadesEvento']['id']), null, __('Are you sure you want to delete # %s?', $actividadesEvento['ActividadesEvento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Actividades Evento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
