
<?php echo $this->Form->create('EventoTiposRecintoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Evento Tipos Recinto Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">eventoTiposRecintoTipos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Evento Tipos Recinto Tipo</h6>
                <hr />

	<!--<?php echo __('Edit Evento Tipos Recinto Tipo'); ?></legend>-->
	<?php
		echo $this->Form->input('recinto_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese recinto_tipo_id'));
				//echo $this->Form->input('recinto_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recinto_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('evento_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
				//echo $this->Form->input('evento_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
		echo '<hr /> ';
		$this->Form->button("Submit Form", array("type" => "submit","class" => "btn btn-primary"));	?> 
		<button class='btn btn-primary'>Guardar</button>
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






<!--


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventoTiposRecintoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EventoTiposRecintoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Recinto Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


