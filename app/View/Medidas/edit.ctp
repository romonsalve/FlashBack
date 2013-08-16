<div class="medidas form">
<?php echo $this->Form->create('Medida'); ?>
	<fieldset>
		<legend><?php echo __('Edit Medida'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Propiedade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Medida.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Medida.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
