
<?php echo $this->Form->create('SolicitudCotizacione'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Add Solicitud Cotizacione</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("solicitudCotizaciones", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('estados_id', array('class' =>'span12','label' => 'Ingrese estados_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('evento_tipos_id', array('class' =>'span12','label' => 'Ingrese evento_tipos_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('clientes_id', array('class' =>'span12','label' => 'Ingrese clientes_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('recinto_tipos_id', array('class' =>'span12','label' => 'Ingrese recinto_tipos_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('nombre', array('class' =>'span12','label' => 'Ingrese nombre', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('descripcion', array('class' =>'span12','label' => 'Ingrese descripcion', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo ParticipanteTipo ?></h6> <hr />'; 		echo $this->Form->input('ParticipanteTipo', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo '<h6> <?php echo Actividade ?></h6> <hr />'; 		echo $this->Form->input('Actividade', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






