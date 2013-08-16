<div class="auditoria view">
<h2><?php  echo __('Auditorium'); ?></h2>
	<dl>
		<dt><?php echo __('Id Audit'); ?></dt>
		<dd>
			<?php echo h($auditorium['Auditorium']['id_audit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Tabla Audit'); ?></dt>
		<dd>
			<?php echo h($auditorium['Auditorium']['nombre_tabla_audit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operacion Audit'); ?></dt>
		<dd>
			<?php echo h($auditorium['Auditorium']['operacion_audit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Antiguo'); ?></dt>
		<dd>
			<?php echo h($auditorium['Auditorium']['valor_antiguo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Nuevo'); ?></dt>
		<dd>
			<?php echo h($auditorium['Auditorium']['valor_nuevo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($auditorium['Auditorium']['hora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($auditorium['Auditorium']['usuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditorium'), array('action' => 'edit', $auditorium['Auditorium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditorium'), array('action' => 'delete', $auditorium['Auditorium']['id']), null, __('Are you sure you want to delete # %s?', $auditorium['Auditorium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditoria'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditorium'), array('action' => 'add')); ?> </li>
	</ul>
</div>
