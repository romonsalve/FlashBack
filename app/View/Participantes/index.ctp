<div class="participantes index">
	<h2><?php echo __('Participantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('participante_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidom_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidop_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('fono_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('contrato_par'); ?></th>
			<th><?php echo $this->Paginator->sort('ranking_par'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_artistico_par'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_par'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($participantes as $participante): ?>
	<tr>
		<td><?php echo h($participante['Participante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participante['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participante['ParticipanteTipo']['id'])); ?>
		</td>
		<td><?php echo h($participante['Participante']['nombre_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['apellidom_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['apellidop_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['direccion_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['fono_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['correo_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['contrato_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['ranking_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['nombre_artistico_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['desc_par']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participante['Participante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participante['Participante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participante['Participante']['id']), null, __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
