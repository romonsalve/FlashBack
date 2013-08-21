
<?php echo $this->Form->create('Vehiculo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Vehiculo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">vehiculos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Vehiculo</h6>
                <hr />

	<!--<?php echo __('Edit Vehiculo'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('vehiculo_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese vehiculo_tipo_id'));
				//echo $this->Form->input('vehiculo_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese vehiculo_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('patente_veh', array('class' =>'span9','placeholder' => 'Ingrese patente_veh'));
				//echo $this->Form->input('patente_veh', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese patente_veh'));
		echo '<hr /> ';
				echo $this->Form->input('modelo_veh', array('class' =>'span9','placeholder' => 'Ingrese modelo_veh'));
				//echo $this->Form->input('modelo_veh', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese modelo_veh'));
		echo '<hr /> ';
				echo $this->Form->input('marca_veh', array('class' =>'span9','placeholder' => 'Ingrese marca_veh'));
				//echo $this->Form->input('marca_veh', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese marca_veh'));
		echo '<hr /> ';
				echo $this->Form->input('desc_veh', array('class' =>'span9','placeholder' => 'Ingrese desc_veh'));
				//echo $this->Form->input('desc_veh', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_veh'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vehiculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vehiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('controller' => 'vehiculo_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo Tipo'), array('controller' => 'vehiculo_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


