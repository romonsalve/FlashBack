<div class="medidasPropiedades view">
<h2><?php  echo __('Medidas Propiedade'); ?></h2>
	<dl>
		<dt><?php echo __('Medida'); ?></dt>
		<dd>
			<?php echo $this->Html->link($medidasPropiedade['Medida']['id'], array('controller' => 'medidas', 'action' => 'view', $medidasPropiedade['Medida']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propiedade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($medidasPropiedade['Propiedade']['id'], array('controller' => 'propiedades', 'action' => 'view', $medidasPropiedade['Propiedade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($medidasPropiedade['MedidasPropiedade']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medidas Propiedade'), array('action' => 'edit', $medidasPropiedade['MedidasPropiedade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Medidas Propiedade'), array('action' => 'delete', $medidasPropiedade['MedidasPropiedade']['id']), null, __('Are you sure you want to delete # %s?', $medidasPropiedade['MedidasPropiedade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas Propiedades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medidas Propiedade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
