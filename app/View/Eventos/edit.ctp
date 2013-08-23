<script type="text/javascript">
function obtenerPropiedades(valor){
	alert("ctm");
	$('#recinto').load('/FlashBack/eventos/buscarRecinto/'+valor+' #listaRecintos');
}
</script>

<?php echo $this->Form->create('Evento'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Evento</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">eventos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <h6>Edit Evento</h6>
                <hr />

	<!--<?php echo __('Edit Evento'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo ' <hr /> ';
					echo $this->Form->input('evento_tipo_id', array('class' =>'span9', 'onChange' => 'obtenerPropiedades(this.value)' ));
				//echo $this->Form->input('evento_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('cliente_id', array('class' =>'span9'));
				//echo $this->Form->input('cliente_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese cliente_id'));
		echo '<div id="recinto"> <hr /> ';
				echo $this->Form->input('recinto_id', array('class' =>'span9'));
				echo "</div>";
				//echo $this->Form->input('recinto_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recinto_id'));
		echo '<hr /> ';
				echo $this->Form->input('estado_evento_id', array('class' =>'span9','placeholder' => 'Ingrese estado_evento_id', 'onChange' => 'obtenerPropiedades(this.value)'));
				//echo $this->Form->input('estado_evento_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese estado_evento_id'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_evento', array('class' =>'span9','placeholder' => 'Ingrese nombre_evento'));
				//echo $this->Form->input('nombre_evento', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_evento'));
		echo '<hr /> ';
				echo $this->Form->input('fecha_de_inicio', array('class' =>'span9','placeholder' => 'Ingrese fecha_de_inicio'));
				//echo $this->Form->input('fecha_de_inicio', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fecha_de_inicio'));
		echo '<hr /> ';
				echo $this->Form->input('fecha_de_termino', array('class' =>'span9','placeholder' => 'Ingrese fecha_de_termino'));
				//echo $this->Form->input('fecha_de_termino', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fecha_de_termino'));
		echo '<hr /> ';
				echo $this->Form->input('precio_evento', array('class' =>'span9','placeholder' => 'Ingrese precio_evento'));
				//echo $this->Form->input('precio_evento', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese precio_evento'));
		echo '<hr /> ';
				echo $this->Form->input('lista_invitados', array('class' =>'span9','placeholder' => 'Ingrese lista_invitados'));
				//echo $this->Form->input('lista_invitados', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese lista_invitados'));
		echo '<hr /> ';
				echo $this->Form->input('descripcion_evento', array('class' =>'span9','placeholder' => 'Ingrese descripcion_evento'));
				//echo $this->Form->input('descripcion_evento', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese descripcion_evento'));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo Recurso ?></h6> <hr />'; 		echo $this->Form->input('Recurso', array('type' => 'select', 'multiple'=>'checkbox') );
echo '<h6> <?php echo Empleado ?></h6> <hr />'; 		echo $this->Form->input('Empleado', array('type' => 'select', 'multiple'=>'checkbox') );
echo '<h6> <?php echo Actividade ?></h6> <hr />'; 		echo $this->Form->input('Actividade', array('type' => 'select', 'multiple'=>'checkbox') );
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Evento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('controller' => 'recintos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto'), array('controller' => 'recintos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Eventos'), array('controller' => 'estado_eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Evento'), array('controller' => 'estado_eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('controller' => 'itinerario_participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('controller' => 'itinerario_participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


