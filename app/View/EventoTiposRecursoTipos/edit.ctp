
<?php echo $this->Form->create('EventoTiposRecursoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Evento Tipos Recurso Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">eventoTiposRecursoTipos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Evento Tipos Recurso Tipo</h6>
                <hr />

	<!--<?php echo __('Edit Evento Tipos Recurso Tipo'); ?></legend>-->
	<?php
		echo $this->Form->input('evento_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
				//echo $this->Form->input('evento_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('recurso_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese recurso_tipo_id'));
				//echo $this->Form->input('recurso_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recurso_tipo_id'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventoTiposRecursoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EventoTiposRecursoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Recurso Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


