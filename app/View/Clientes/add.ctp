
<?php echo $this->Form->create('Cliente'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Cliente</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">clientes</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Cliente</h6>
                <hr />

	<!--<?php echo __('Add Cliente'); ?></legend>-->
	<?php
		echo $this->Form->input('cliente_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese cliente_tipo_id'));
				//echo $this->Form->input('cliente_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese cliente_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('rut_cli', array('class' =>'span9','placeholder' => 'Ingrese rut_cli'));
				//echo $this->Form->input('rut_cli', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese rut_cli'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_cli', array('class' =>'span9','placeholder' => 'Ingrese nombre_cli'));
				//echo $this->Form->input('nombre_cli', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_cli'));
		echo '<hr /> ';
				echo $this->Form->input('apellidom_cli', array('class' =>'span9','placeholder' => 'Ingrese apellidom_cli'));
				//echo $this->Form->input('apellidom_cli', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese apellidom_cli'));
		echo '<hr /> ';
				echo $this->Form->input('apellidop_cli', array('class' =>'span9','placeholder' => 'Ingrese apellidop_cli'));
				//echo $this->Form->input('apellidop_cli', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese apellidop_cli'));
		echo '<hr /> ';
				echo $this->Form->input('direccion_cli', array('class' =>'span9','placeholder' => 'Ingrese direccion_cli'));
				//echo $this->Form->input('direccion_cli', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese direccion_cli'));
		echo '<hr /> ';
				echo $this->Form->input('fono_cli', array('class' =>'span9','placeholder' => 'Ingrese fono_cli'));
				//echo $this->Form->input('fono_cli', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fono_cli'));
		echo '<hr /> ';
				echo $this->Form->input('correo_cli', array('class' =>'span9','placeholder' => 'Ingrese correo_cli'));
				//echo $this->Form->input('correo_cli', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese correo_cli'));
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

		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('controller' => 'cliente_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Tipo'), array('controller' => 'cliente_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


