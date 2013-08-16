<div class="eventoTiposRecintoTipos index">
	<h2><?php echo __('Evento Tipos Recinto Tipos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('recinto_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_tipo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($eventoTiposRecintoTipos as $eventoTiposRecintoTipo): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($eventoTiposRecintoTipo['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $eventoTiposRecintoTipo['RecintoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eventoTiposRecintoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposRecintoTipo['EventoTipo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evento Tipos Recinto Tipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
