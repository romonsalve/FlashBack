<script type="text/javascript">
function obtenerPropiedades(valor){
  $('#propi').load('/FlashBack/SolicitudCotizaciones/buscarParticipantesActividades/'+valor+' #listaPropiedades');
  $('#propi2').load('/FlashBack/SolicitudCotizaciones/buscarRecintoTipo/'+valor+' #listaPropiedades');

}
</script>

<?php echo $this->Form->create('SolicitudCotizacione'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Solicitando una cotización</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("Solicitudes de Cotización", 'index');echo $this->TwitterBootstrap->add_crumb("Solicitar", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php
    if($rol == 'cliente') echo '<div style="display: none">';
		echo $this->Form->input('estado_id', array('default' => 1, 'class' =>'span12','label' => 'Ingrese estado_id', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    echo '<hr /> ';
    if($rol == 'cliente') echo '</div>';

		echo $this->Form->input('evento_tipo_id', array('class' =>'span12','label' => 'Escoja un tipo de evento', 'onchange' => 'obtenerPropiedades(this.value)','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';

    if($rol == 'cliente') echo '<div style="display: none">';
		echo $this->Form->input('cliente_id', array('default' => $c_id, 'class' =>'span12','label' => 'Ingrese cliente_id', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    if($rol == 'cliente') echo '</div>';

    echo ' <div id="propi2"> </div>';
    echo '<hr />';
		echo $this->Form->input('nombre', array('type' => 'text', 'class' =>'span12','label' => 'Ingrese un nombre para este evento:', 'placeholder' => 'Cumpleaños de Juan','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('descripcion', array('class' =>'span12','label' => 'Escriba los detalles a considerar en la cotización:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
	?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
                <div id="num2"></div>
		<?php 
    echo ' <div id="propi"> </div>';
    echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






