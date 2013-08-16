<div class="participantes view">
<h2><?php  echo __('Participante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participante Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participante['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participante['ParticipanteTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Cont Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['nombre_cont_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidom Cont Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['apellidom_cont_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidop Cont Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['apellidop_cont_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Cont Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['direccion_cont_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fono Cont Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['fono_cont_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Cont Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['correo_cont_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contrato Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['contrato_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ranking Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['ranking_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Artistico Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['nombre_artistico_par']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Par'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['desc_par']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante'), array('action' => 'edit', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante'), array('action' => 'delete', $participante['Participante']['id']), null, __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
