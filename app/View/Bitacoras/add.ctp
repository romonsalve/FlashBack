
<?php echo $this->Form->create('Bitacora'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Bitacora</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">bitacoras</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Bitacora</h6>
                <hr />

	<!--<?php echo __('Add Bitacora'); ?></legend>-->
	<?php
		echo $this->Form->input('evento_id', array('class' =>'span9','placeholder' => 'Ingrese evento_id'));
				//echo $this->Form->input('evento_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_id'));
		echo '<hr /> ';
				echo $this->Form->input('vehiculo_id', array('class' =>'span9','placeholder' => 'Ingrese vehiculo_id'));
				//echo $this->Form->input('vehiculo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese vehiculo_id'));
		echo '<hr /> ';
				echo $this->Form->input('hora_ini_bit', array('class' =>'span9','placeholder' => 'Ingrese hora_ini_bit'));
				//echo $this->Form->input('hora_ini_bit', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese hora_ini_bit'));
		echo '<hr /> ';
				echo $this->Form->input('hora_ter_bit', array('class' =>'span9','placeholder' => 'Ingrese hora_ter_bit'));
				//echo $this->Form->input('hora_ter_bit', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese hora_ter_bit'));
		echo '<hr /> ';
				echo $this->Form->input('desc_bit', array('class' =>'span9','placeholder' => 'Ingrese desc_bit'));
				//echo $this->Form->input('desc_bit', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_bit'));
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

		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


