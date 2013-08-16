<div class="recursos view">
<h2><?php  echo __('Recurso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recurso['Recurso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recurso Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recurso['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $recurso['RecursoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recurso['Proveedore']['id'], array('controller' => 'proveedores', 'action' => 'view', $recurso['Proveedore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Rec'); ?></dt>
		<dd>
			<?php echo h($recurso['Recurso']['cantidad_rec']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurso'), array('action' => 'edit', $recurso['Recurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recurso'), array('action' => 'delete', $recurso['Recurso']['id']), null, __('Are you sure you want to delete # %s?', $recurso['Recurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Propiedades'); ?></h3>
	<?php if (!empty($recurso['Propiedade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Prop'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recurso['Propiedade'] as $propiedade): ?>
		<tr>
			<td><?php echo $propiedade['id']; ?></td>
			<td><?php echo $propiedade['nombre_prop']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'propiedades', 'action' => 'view', $propiedade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'propiedades', 'action' => 'edit', $propiedade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'propiedades', 'action' => 'delete', $propiedade['id']), null, __('Are you sure you want to delete # %s?', $propiedade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
