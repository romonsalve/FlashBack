
<?php echo $this->Form->create('ParticipanteTiposSolicitudCotizacione'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Participante Tipos Solicitud Cotizacione</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">participanteTiposSolicitudCotizaciones</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Participante Tipos Solicitud Cotizacione</h6>
                <hr />

	<!--<?php echo __('Edit Participante Tipos Solicitud Cotizacione'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('solicitud_cotizacione_id', array('class' =>'span9','placeholder' => 'Ingrese solicitud_cotizacione_id'));
				//echo $this->Form->input('solicitud_cotizacione_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese solicitud_cotizacione_id'));
		echo '<hr /> ';
				echo $this->Form->input('participante_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese participante_tipo_id'));
				//echo $this->Form->input('participante_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese participante_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('desc_par_sol', array('class' =>'span9','placeholder' => 'Ingrese desc_par_sol'));
				//echo $this->Form->input('desc_par_sol', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_par_sol'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ParticipanteTiposSolicitudCotizacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ParticipanteTiposSolicitudCotizacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participante Tipos Solicitud Cotizaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


