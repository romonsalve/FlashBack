<div class="actividadesEventos view">
<h2><?php  echo __('Actividades Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $actividadesEvento['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEvento['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesEvento['Actividade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividadesEvento['ActividadesEvento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ini Act'); ?></dt>
		<dd>
			<?php echo h($actividadesEvento['ActividadesEvento']['fecha_ini_act']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ter Act'); ?></dt>
		<dd>
			<?php echo h($actividadesEvento['ActividadesEvento']['fecha_ter_act']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Act'); ?></dt>
		<dd>
			<?php echo h($actividadesEvento['ActividadesEvento']['estado_act']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Evento'), array('action' => 'edit', $actividadesEvento['ActividadesEvento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Evento'), array('action' => 'delete', $actividadesEvento['ActividadesEvento']['id']), null, __('Are you sure you want to delete # %s?', $actividadesEvento['ActividadesEvento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
