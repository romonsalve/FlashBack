<div class="propiedadesRecursoTipos view">
<h2><?php  echo __('Propiedades Recurso Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Propiedade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesRecursoTipo['Propiedade']['id'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecursoTipo['Propiedade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recurso Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesRecursoTipo['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $propiedadesRecursoTipo['RecursoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Rango Prop Tip'); ?></dt>
		<dd>
			<?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['max_rango_prop_tip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Rango Prop Tip'); ?></dt>
		<dd>
			<?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['min_rango_prop_tip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medida Prop Tip'); ?></dt>
		<dd>
			<?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['medida_prop_tip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propiedades Recurso Tipo'), array('action' => 'edit', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propiedades Recurso Tipo'), array('action' => 'delete', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades Recurso Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedades Recurso Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
