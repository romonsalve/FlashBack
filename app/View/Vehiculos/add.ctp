
<?php echo $this->Form->create('Vehiculo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Agregar un Vehículo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("Vehículos", 'index');
	echo $this->TwitterBootstrap->add_crumb("Agregar", null);
	echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('vehiculo_tipo_id', array('class' =>'span12','label' => 'Seleccione un tipo de vehículo:', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo $this->Html->link( "<span class='btn btn-primary btn-lg'>Agregar Tipo de Vehículo</span>", array("controller" => "VehiculoTipos", "action" => "add"), array("escape" => false));
		echo '<hr /> ';
		echo $this->Form->input('patente', array('type' => 'text', 'class' =>'span12','label' => 'Ingrese la patente:', 'placeholder' => 'XXXX00','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('modelo', array('type' => 'text','class' =>'span12','label' => 'Ingrese el modelo del vehículo:', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('marca', array('type' => 'text','class' =>'span12','label' => 'Ingrese la marca del vehículo:', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('descripcion', array('class' =>'span12','label' => 'Ingrese una descripción:', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






