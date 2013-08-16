<div class="clienteTipos view">
<h2><?php  echo __('Cliente Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clienteTipo['ClienteTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Cli Tipo'); ?></dt>
		<dd>
			<?php echo h($clienteTipo['ClienteTipo']['nombre_cli_tipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente Tipo'), array('action' => 'edit', $clienteTipo['ClienteTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente Tipo'), array('action' => 'delete', $clienteTipo['ClienteTipo']['id']), null, __('Are you sure you want to delete # %s?', $clienteTipo['ClienteTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($clienteTipo['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Tipo Id'); ?></th>
		<th><?php echo __('Nombre Cli'); ?></th>
		<th><?php echo __('Apellidom Cli'); ?></th>
		<th><?php echo __('Apellidop Cli'); ?></th>
		<th><?php echo __('Direccion Cli'); ?></th>
		<th><?php echo __('Fono Cli'); ?></th>
		<th><?php echo __('Correo Cli'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($clienteTipo['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['cliente_tipo_id']; ?></td>
			<td><?php echo $cliente['nombre_cli']; ?></td>
			<td><?php echo $cliente['apellidom_cli']; ?></td>
			<td><?php echo $cliente['apellidop_cli']; ?></td>
			<td><?php echo $cliente['direccion_cli']; ?></td>
			<td><?php echo $cliente['fono_cli']; ?></td>
			<td><?php echo $cliente['correo_cli']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), null, __('Are you sure you want to delete # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
