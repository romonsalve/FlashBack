
<?php echo $this->Form->create('EmpleadosEvento'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Empleados Evento</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">empleadosEventos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Empleados Evento</h6>
                <hr />

	<!--<?php echo __('Edit Empleados Evento'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('empleado_id', array('class' =>'span9','placeholder' => 'Ingrese empleado_id'));
				//echo $this->Form->input('empleado_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese empleado_id'));
		echo '<hr /> ';
				echo $this->Form->input('evento_id', array('class' =>'span9','placeholder' => 'Ingrese evento_id'));
				//echo $this->Form->input('evento_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_id'));
		echo '<hr /> ';
				echo $this->Form->input('hora_ini_ete', array('class' =>'span9','placeholder' => 'Ingrese hora_ini_ete'));
				//echo $this->Form->input('hora_ini_ete', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese hora_ini_ete'));
		echo '<hr /> ';
				echo $this->Form->input('hora_ter_ete', array('class' =>'span9','placeholder' => 'Ingrese hora_ter_ete'));
				//echo $this->Form->input('hora_ter_ete', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese hora_ter_ete'));
		echo '<hr /> ';
				echo $this->Form->input('cargo_ete', array('class' =>'span9','placeholder' => 'Ingrese cargo_ete'));
				//echo $this->Form->input('cargo_ete', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese cargo_ete'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmpleadosEvento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmpleadosEvento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


