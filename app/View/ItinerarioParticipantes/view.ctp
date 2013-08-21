 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Itinerario Participante'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Itinerario Participante'); ?></a> <span class="divider">/</span></li>
          <li class="active">Ver</li>
        </ul>        

        <!-- Breadcrumb ends -->
        <hr />
        <div class="box-body">
          
                     <!-- Pricing table -->                     
                     <!-- Price details. Note down the class name before you edit. -->
                     <div class="row-fluid">
                     
                        <div class="span8 offset2">
                        
                           
                           <!-- Pricing table #1. -->
                           <div class="pricel center">
                                 <div class="phead-top b-orange">
                                    <!-- Title -->
                                    <h4>Información del <?php echo __('Itinerario Participante').' '; ?> <?php echo $itinerarioParticipante['ItinerarioParticipante']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($itinerarioParticipante['ItinerarioParticipante']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($itinerarioParticipante['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $itinerarioParticipante['Evento']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Participante</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($itinerarioParticipante['Participante']['id'], array('controller' => 'participantes', 'action' => 'view', $itinerarioParticipante['Participante']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Hora Ini Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($itinerarioParticipante['ItinerarioParticipante']['hora_ini_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Hora Ter Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($itinerarioParticipante['ItinerarioParticipante']['hora_ter_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Desc Iti Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($itinerarioParticipante['ItinerarioParticipante']['desc_iti_par'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $itinerarioParticipante['ItinerarioParticipante']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $itinerarioParticipante['ItinerarioParticipante']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Itinerario Participante?', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itinerario Participante'), array('action' => 'edit', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itinerario Participante'), array('action' => 'delete', $itinerarioParticipante['ItinerarioParticipante']['id']), null, __('Are you sure you want to delete # %s?', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
