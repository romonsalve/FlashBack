<div class="propiedades view">
<h2><?php  echo __('Propiedade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propiedade['Propiedade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Prop'); ?></dt>
		<dd>
			<?php echo h($propiedade['Propiedade']['nombre_prop']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propiedade'), array('action' => 'edit', $propiedade['Propiedade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propiedade'), array('action' => 'delete', $propiedade['Propiedade']['id']), null, __('Are you sure you want to delete # %s?', $propiedade['Propiedade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Recurso Tipos'); ?></h3>
	<?php if (!empty($propiedade['RecursoTipo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Tipo Id'); ?></th>
		<th><?php echo __('Desc Rect'); ?></th>
		<th><?php echo __('Clasif Rect'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($propiedade['RecursoTipo'] as $recursoTipo): ?>
		<tr>
			<td><?php echo $recursoTipo['id']; ?></td>
			<td><?php echo $recursoTipo['evento_tipo_id']; ?></td>
			<td><?php echo $recursoTipo['desc_rect']; ?></td>
			<td><?php echo $recursoTipo['clasif_rect']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recurso_tipos', 'action' => 'view', $recursoTipo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recurso_tipos', 'action' => 'edit', $recursoTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recurso_tipos', 'action' => 'delete', $recursoTipo['id']), null, __('Are you sure you want to delete # %s?', $recursoTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Medidas'); ?></h3>
	<?php if (!empty($propiedade['Medida'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($propiedade['Medida'] as $medida): ?>
		<tr>
			<td><?php echo $medida['id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'medidas', 'action' => 'view', $medida['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'medidas', 'action' => 'edit', $medida['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'medidas', 'action' => 'delete', $medida['id']), null, __('Are you sure you want to delete # %s?', $medida['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Recursos'); ?></h3>
	<?php if (!empty($propiedade['Recurso'])): ?>
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
		foreach ($propiedade['Recurso'] as $recurso): ?>
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
