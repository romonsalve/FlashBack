<div class="recintos view">
<h2><?php  echo __('Recinto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recinto['Recinto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recinto Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recinto['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $recinto['RecintoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Reci'); ?></dt>
		<dd>
			<?php echo h($recinto['Recinto']['nombre_reci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mapa Reci'); ?></dt>
		<dd>
			<?php echo h($recinto['Recinto']['mapa_reci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimension Reci'); ?></dt>
		<dd>
			<?php echo h($recinto['Recinto']['dimension_reci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion Reci'); ?></dt>
		<dd>
			<?php echo h($recinto['Recinto']['ubicacion_reci']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recinto'), array('action' => 'edit', $recinto['Recinto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recinto'), array('action' => 'delete', $recinto['Recinto']['id']), null, __('Are you sure you want to delete # %s?', $recinto['Recinto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Eventos'); ?></h3>
	<?php if (!empty($recinto['Evento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Recinto Id'); ?></th>
		<th><?php echo __('Evento Tipo Id'); ?></th>
		<th><?php echo __('Estado Evento Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Nombre Evento'); ?></th>
		<th><?php echo __('Descripcion Evento'); ?></th>
		<th><?php echo __('Fecha De Inicio'); ?></th>
		<th><?php echo __('Fecha De Termino'); ?></th>
		<th><?php echo __('Precio Evento'); ?></th>
		<th><?php echo __('Lista Invitados'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recinto['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['id']; ?></td>
			<td><?php echo $evento['recinto_id']; ?></td>
			<td><?php echo $evento['evento_tipo_id']; ?></td>
			<td><?php echo $evento['estado_evento_id']; ?></td>
			<td><?php echo $evento['cliente_id']; ?></td>
			<td><?php echo $evento['nombre_evento']; ?></td>
			<td><?php echo $evento['descripcion_evento']; ?></td>
			<td><?php echo $evento['fecha_de_inicio']; ?></td>
			<td><?php echo $evento['fecha_de_termino']; ?></td>
			<td><?php echo $evento['precio_evento']; ?></td>
			<td><?php echo $evento['lista_invitados']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'eventos', 'action' => 'edit', $evento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'eventos', 'action' => 'delete', $evento['id']), null, __('Are you sure you want to delete # %s?', $evento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
