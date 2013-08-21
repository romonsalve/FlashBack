
<?php echo $this->Form->create('Recinto'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Recinto</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">recintos</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Recinto</h6>
                <hr />

	<!--<?php echo __('Add Recinto'); ?></legend>-->
	<?php
		echo $this->Form->input('recinto_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese recinto_tipo_id'));
				//echo $this->Form->input('recinto_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recinto_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_reci', array('class' =>'span9','placeholder' => 'Ingrese nombre_reci'));
				//echo $this->Form->input('nombre_reci', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_reci'));
		echo '<hr /> ';
				echo $this->Form->input('mapa_reci', array('class' =>'span9','placeholder' => 'Ingrese mapa_reci'));
				//echo $this->Form->input('mapa_reci', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese mapa_reci'));
		echo '<hr /> ';
				echo $this->Form->input('dimension_reci', array('class' =>'span9','placeholder' => 'Ingrese dimension_reci'));
				//echo $this->Form->input('dimension_reci', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese dimension_reci'));
		echo '<hr /> ';
				echo $this->Form->input('ubicacion_reci', array('class' =>'span9','placeholder' => 'Ingrese ubicacion_reci'));
				//echo $this->Form->input('ubicacion_reci', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese ubicacion_reci'));
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

		<li><?php echo $this->Html->link(__('List Recintos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


