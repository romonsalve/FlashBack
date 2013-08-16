<div class="recursoTipos view">
<h2><?php  echo __('Recurso Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recursoTipo['RecursoTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recursoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $recursoTipo['EventoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Rect'); ?></dt>
		<dd>
			<?php echo h($recursoTipo['RecursoTipo']['desc_rect']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clasif Rect'); ?></dt>
		<dd>
			<?php echo h($recursoTipo['RecursoTipo']['clasif_rect']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurso Tipo'), array('action' => 'edit', $recursoTipo['RecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recurso Tipo'), array('action' => 'delete', $recursoTipo['RecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $recursoTipo['RecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Recursos'); ?></h3>
	<?php if (!empty($recursoTipo['Recurso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Recurso Tipo Id'); ?></th>
		<th><?php echo __('Proveedore Id'); ?></th>
		<th><?php echo __('Cantidad Rec'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recursoTipo['Recurso'] as $recurso): ?>
		<tr>
			<td><?php echo $recurso['id']; ?></td>
			<td><?php echo $recurso['recurso_tipo_id']; ?></td>
			<td><?php echo $recurso['proveedore_id']; ?></td>
			<td><?php echo $recurso['cantidad_rec']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recursos', 'action' => 'view', $recurso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recursos', 'action' => 'edit', $recurso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recursos', 'action' => 'delete', $recurso['id']), null, __('Are you sure you want to delete # %s?', $recurso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Propiedades'); ?></h3>
	<?php if (!empty($recursoTipo['Propiedade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Prop'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recursoTipo['Propiedade'] as $propiedade): ?>
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
<div class="related">
	<h3><?php echo __('Related Proveedores'); ?></h3>
	<?php if (!empty($recursoTipo['Proveedore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Pro'); ?></th>
		<th><?php echo __('Direccion Pro'); ?></th>
		<th><?php echo __('Fono Pro'); ?></th>
		<th><?php echo __('Correo Pro'); ?></th>
		<th><?php echo __('Ranking Pro'); ?></th>
		<th><?php echo __('Contrato Pro'); ?></th>
		<th><?php echo __('Nombre Conta'); ?></th>
		<th><?php echo __('Apellido Conta'); ?></th>
		<th><?php echo __('Correo Conta'); ?></th>
		<th><?php echo __('Fono Conta'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recursoTipo['Proveedore'] as $proveedore): ?>
		<tr>
			<td><?php echo $proveedore['id']; ?></td>
			<td><?php echo $proveedore['nombre_pro']; ?></td>
			<td><?php echo $proveedore['direccion_pro']; ?></td>
			<td><?php echo $proveedore['fono_pro']; ?></td>
			<td><?php echo $proveedore['correo_pro']; ?></td>
			<td><?php echo $proveedore['ranking_pro']; ?></td>
			<td><?php echo $proveedore['contrato_pro']; ?></td>
			<td><?php echo $proveedore['nombre_conta']; ?></td>
			<td><?php echo $proveedore['apellido_conta']; ?></td>
			<td><?php echo $proveedore['correo_conta']; ?></td>
			<td><?php echo $proveedore['fono_conta']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proveedores', 'action' => 'view', $proveedore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proveedores', 'action' => 'edit', $proveedore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proveedores', 'action' => 'delete', $proveedore['id']), null, __('Are you sure you want to delete # %s?', $proveedore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
