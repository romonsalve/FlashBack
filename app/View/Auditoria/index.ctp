<div class="auditoria index">
	<h2><?php echo __('Auditoria'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_audit'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_tabla_audit'); ?></th>
			<th><?php echo $this->Paginator->sort('operacion_audit'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_antiguo'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_nuevo'); ?></th>
			<th><?php echo $this->Paginator->sort('hora'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($auditoria as $auditorium): ?>
	<tr>
		<td><?php echo h($auditorium['Auditorium']['id_audit']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['nombre_tabla_audit']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['operacion_audit']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['valor_antiguo']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['valor_nuevo']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['hora']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['usuario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $auditorium['Auditorium']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $auditorium['Auditorium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $auditorium['Auditorium']['id']), null, __('Are you sure you want to delete # %s?', $auditorium['Auditorium']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Auditorium'), array('action' => 'add')); ?></li>
	</ul>
</div>
