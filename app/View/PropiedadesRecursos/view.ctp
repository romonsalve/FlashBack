<div class="propiedadesRecursos view">
<h2><?php  echo __('Propiedades Recurso'); ?></h2>
	<dl>
		<dt><?php echo __('Recurso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesRecurso['Recurso']['id'], array('controller' => 'recursos', 'action' => 'view', $propiedadesRecurso['Recurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propiedade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesRecurso['Propiedade']['id'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecurso['Propiedade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propiedadesRecurso['PropiedadesRecurso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Pro Rec'); ?></dt>
		<dd>
			<?php echo h($propiedadesRecurso['PropiedadesRecurso']['valor_pro_rec']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propiedades Recurso'), array('action' => 'edit', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propiedades Recurso'), array('action' => 'delete', $propiedadesRecurso['PropiedadesRecurso']['id']), null, __('Are you sure you want to delete # %s?', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades Recursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedades Recurso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
