<div class="eventoTiposRecintoTipos view">
<h2><?php  echo __('Evento Tipos Recinto Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Recinto Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventoTiposRecintoTipo['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $eventoTiposRecintoTipo['RecintoTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventoTiposRecintoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposRecintoTipo['EventoTipo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento Tipos Recinto Tipo'), array('action' => 'edit', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento Tipos Recinto Tipo'), array('action' => 'delete', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Recinto Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipos Recinto Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
