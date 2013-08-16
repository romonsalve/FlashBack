<div class="medidas view">
<h2><?php  echo __('Medida'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($medida['Medida']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medida'), array('action' => 'edit', $medida['Medida']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Medida'), array('action' => 'delete', $medida['Medida']['id']), null, __('Are you sure you want to delete # %s?', $medida['Medida']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Propiedades'); ?></h3>
	<?php if (!empty($medida['Propiedade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Prop'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($medida['Propiedade'] as $propiedade): ?>
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
