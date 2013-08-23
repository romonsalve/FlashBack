
<?php echo $this->Form->create('ActividadesSolicitudCotizacione'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Edit Actividades Solicitud Cotizacione</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("actividadesSolicitudCotizaciones", 'index');echo $this->TwitterBootstrap->add_crumb("Edit", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('solicitud_cotizacione_id', array('class' =>'span12','label' => 'Ingrese solicitud_cotizacione_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('actividade_id', array('class' =>'span12','label' => 'Ingrese actividade_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






