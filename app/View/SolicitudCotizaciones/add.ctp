
<?php echo $this->Form->create('SolicitudCotizacione'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Solicitud Cotizacione</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">solicitudCotizaciones</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <h6>Add Solicitud Cotizacione</h6>
                <hr />

	<!--<?php echo __('Add Solicitud Cotizacione'); ?></legend>-->
	<?php
		echo $this->Form->input('estado_id', array('class' =>'span9','placeholder' => 'Ingrese estado_id'));
				//echo $this->Form->input('estado_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese estado_id'));
		echo '<hr /> ';
				echo $this->Form->input('evento_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
				//echo $this->Form->input('evento_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('cliente_id', array('class' =>'span9','placeholder' => 'Ingrese cliente_id'));
				//echo $this->Form->input('cliente_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese cliente_id'));
		echo '<hr /> ';
				echo $this->Form->input('recinto_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese recinto_tipo_id'));
				//echo $this->Form->input('recinto_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recinto_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_cot', array('class' =>'span9','placeholder' => 'Ingrese nombre_cot'));
				//echo $this->Form->input('nombre_cot', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_cot'));
		echo '<hr /> ';
				echo $this->Form->input('desc_cot', array('class' =>'span9','placeholder' => 'Ingrese desc_cot'));
				//echo $this->Form->input('desc_cot', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_cot'));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo ParticipanteTipo ?></h6> <hr />'; 		echo $this->Form->input('ParticipanteTipo', array('type' => 'select', 'multiple'=>'checkbox') );
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

		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


