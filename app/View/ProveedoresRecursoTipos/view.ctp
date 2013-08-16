<div class="proveedoresRecursoTipos view">
<h2><?php  echo __('Proveedores Recurso Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Proveedore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proveedoresRecursoTipo['Proveedore']['id'], array('controller' => 'proveedores', 'action' => 'view', $proveedoresRecursoTipo['Proveedore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recurso Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proveedoresRecursoTipo['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $proveedoresRecursoTipo['RecursoTipo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedores Recurso Tipo'), array('action' => 'edit', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedores Recurso Tipo'), array('action' => 'delete', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores Recurso Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedores Recurso Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
