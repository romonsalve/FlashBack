<div class="actividadesEventoTipos view">
<h2><?php  echo __('Actividades Evento Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Evento Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEventoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $actividadesEventoTipo['EventoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEventoTipo['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesEventoTipo['Actividade']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Evento Tipo'), array('action' => 'edit', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Evento Tipo'), array('action' => 'delete', $actividadesEventoTipo['ActividadesEventoTipo']['id']), null, __('Are you sure you want to delete # %s?', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Evento Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Evento Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
