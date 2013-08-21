 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Evento Tipos Participante Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Evento Tipos Participante Tipo'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Evento Tipos Participante Tipo').' '; ?> <?php echo $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventoTiposParticipanteTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposParticipanteTipo['EventoTipo']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Participante Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventoTiposParticipanteTipo['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $eventoTiposParticipanteTipo['ParticipanteTipo']['id']))." &nbsp</div>"; ?> </li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Evento Tipos Participante Tipo?', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento Tipos Participante Tipo'), array('action' => 'edit', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento Tipos Participante Tipo'), array('action' => 'delete', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTiposParticipanteTipo['EventoTiposParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Participante Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipos Participante Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
