
<?php echo $this->Form->create('Empleado'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Empleado</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">empleados</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <h6>Add Empleado</h6>
                <hr />

	<!--<?php echo __('Add Empleado'); ?></legend>-->
	<?php
		echo $this->Form->input('empleado_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese empleado_tipo_id'));
				//echo $this->Form->input('empleado_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese empleado_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('rut_emp', array('class' =>'span9','placeholder' => 'Ingrese rut_emp'));
				//echo $this->Form->input('rut_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese rut_emp'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_emp', array('class' =>'span9','placeholder' => 'Ingrese nombre_emp'));
				//echo $this->Form->input('nombre_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_emp'));
		echo '<hr /> ';
				echo $this->Form->input('apellidom_emp', array('class' =>'span9','placeholder' => 'Ingrese apellidom_emp'));
				//echo $this->Form->input('apellidom_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese apellidom_emp'));
		echo '<hr /> ';
				echo $this->Form->input('apellidop_emp', array('class' =>'span9','placeholder' => 'Ingrese apellidop_emp'));
				//echo $this->Form->input('apellidop_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese apellidop_emp'));
		echo '<hr /> ';
				echo $this->Form->input('direccion_emp', array('class' =>'span9','placeholder' => 'Ingrese direccion_emp'));
				//echo $this->Form->input('direccion_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese direccion_emp'));
		echo '<hr /> ';
				echo $this->Form->input('fono_emp', array('class' =>'span9','placeholder' => 'Ingrese fono_emp'));
				//echo $this->Form->input('fono_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fono_emp'));
		echo '<hr /> ';
				echo $this->Form->input('correo_emp', array('class' =>'span9','placeholder' => 'Ingrese correo_emp'));
				//echo $this->Form->input('correo_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese correo_emp'));
		echo '<hr /> ';
				echo $this->Form->input('contrato_emp', array('class' =>'span9','placeholder' => 'Ingrese contrato_emp'));
				//echo $this->Form->input('contrato_emp', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese contrato_emp'));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo Evento ?></h6> <hr />'; 		echo $this->Form->input('Evento', array('type' => 'select', 'multiple'=>'checkbox') );
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

		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('controller' => 'empleado_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado Tipo'), array('controller' => 'empleado_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


