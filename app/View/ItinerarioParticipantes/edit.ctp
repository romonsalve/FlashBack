
<?php echo $this->Form->create('ItinerarioParticipante'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Itinerario Participante</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">itinerarioParticipantes</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Itinerario Participante</h6>
                <hr />

	<!--<?php echo __('Edit Itinerario Participante'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('evento_id', array('class' =>'span9','placeholder' => 'Ingrese evento_id'));
				//echo $this->Form->input('evento_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_id'));
		echo '<hr /> ';
				echo $this->Form->input('participante_id', array('class' =>'span9','placeholder' => 'Ingrese participante_id'));
				//echo $this->Form->input('participante_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese participante_id'));
		echo '<hr /> ';
				echo $this->Form->input('hora_ini_par', array('class' =>'span9','placeholder' => 'Ingrese hora_ini_par'));
				//echo $this->Form->input('hora_ini_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese hora_ini_par'));
		echo '<hr /> ';
				echo $this->Form->input('hora_ter_par', array('class' =>'span9','placeholder' => 'Ingrese hora_ter_par'));
				//echo $this->Form->input('hora_ter_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese hora_ter_par'));
		echo '<hr /> ';
				echo $this->Form->input('desc_iti_par', array('class' =>'span9','placeholder' => 'Ingrese desc_iti_par'));
				//echo $this->Form->input('desc_iti_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_iti_par'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItinerarioParticipante.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ItinerarioParticipante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


