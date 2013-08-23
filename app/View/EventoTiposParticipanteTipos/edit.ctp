
<?php echo $this->Form->create('EventoTiposParticipanteTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Edit Evento Tipos Participante Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("eventoTiposParticipanteTipos", 'index');echo $this->TwitterBootstrap->add_crumb("Edit", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('evento_tipo_id', array('class' =>'span12','label' => 'Ingrese evento_tipo_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('participante_tipo_id', array('class' =>'span12','label' => 'Ingrese participante_tipo_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






