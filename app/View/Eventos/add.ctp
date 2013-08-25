<script type="text/javascript">
function obtenerPropiedades(valor){
	$('#recinto').load('/FlashBack/eventos/buscarRecinto/'+valor+' #listaRecintos');
	$('#recursos').load('/FlashBack/eventos/buscarRecursos/'+valor+' #listaRecintos');
	$('#actividad').load('/FlashBack/eventos/buscarActividades/'+valor+' #listaRecintos');
}
</script>

<?php echo $this->Form->create('Evento'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Add Evento</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("eventos", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php

	echo $this->Form->input('evento_tipo_id', array('class' =>'span12','label' => 'Escoja un tipo de evento', 'empty' => '(Seleccione una opción)', 'onchange' => 'obtenerPropiedades(this.value)',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo '<div id="recinto">'; 
		echo '</div><hr /> ';

				echo $this->Form->input('cliente_id', array('class' =>'span12','label' => 'Ingrese cliente_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('nombre', array('type' => 'text','class' =>'span12','label' => 'Ingrese un nombre distintivo para este evento:', 'placeholder' => 'Cumpleaños de Edgardito',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('fecha_inicio', array('class' =>'span4','label' => 'Ingrese la fecha de inicio para este evento', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('fecha_termino', array('class' =>'span4','label' => 'Ingrese la fecha de término de este evento', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('lista_invitados', array('class' =>'span12','label' => 'Ingrese la lista de invitados si desea que seguridad controle el acceso.', 'placeholder' => 'Juan
			Miguel
			Cristóbal
			Ricardo
			Claudio
			Felipe',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('estado', array('class' =>'span12','label' => 'Ingrese estado', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('precio', array('type' => 'text', 'class' =>'span12','label' => 'Ingrese precio', 'placeholder' => '',
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
echo '<div class="recursos"><h6> <?php echo Recurso ?></h6> <hr />'; 		echo $this->Form->input('Recurso', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo '</div>';
echo '<h6> <?php echo Empleado ?></h6> <hr />'; 		echo $this->Form->input('Empleado', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo '<div class= "actividad"><h6> <?php echo Actividade ?></h6> <hr />'; 		echo $this->Form->input('Actividade', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
	echo '</div>';
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






