<div class="proveedores view">
<h2><?php  echo __('Proveedore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Pro'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['nombre_pro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Pro'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['direccion_pro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fono Pro'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['fono_pro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Pro'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['correo_pro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ranking Pro'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['ranking_pro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contrato Pro'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['contrato_pro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Conta'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['nombre_conta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Conta'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['apellido_conta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Conta'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['correo_conta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fono Conta'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['fono_conta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedore'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedore'), array('action' => 'delete', $proveedore['Proveedore']['id']), null, __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Recursos'); ?></h3>
	<?php if (!empty($proveedore['Recurso'])): ?>
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
		foreach ($proveedore['Recurso'] as $recurso): ?>
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
	<h3><?php echo __('Related Recurso Tipos'); ?></h3>
	<?php if (!empty($proveedore['RecursoTipo'])): ?>
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
		foreach ($proveedore['RecursoTipo'] as $recursoTipo): ?>
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
