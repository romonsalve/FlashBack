 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Participante Tipos Solicitud Cotizacione'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("participanteTiposSolicitudCotizaciones", array('controller' => 'ParticipanteTiposSolicitudCotizacione', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Participante Tipos Solicitud Cotizacione", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Participante Tipos Solicitud Cotizacione').' '; ?> <?php echo $participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Solicitud Cotizaciones</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($participanteTiposSolicitudCotizacione['SolicitudCotizaciones']['id'], array('controller' => 'solicitud_cotizaciones', 'action' => 'view', $participanteTiposSolicitudCotizacione['SolicitudCotizaciones']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Participante Tipos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($participanteTiposSolicitudCotizacione['ParticipanteTipos']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participanteTiposSolicitudCotizacione['ParticipanteTipos']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['descripcion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Participante Tipos Solicitud Cotizacione?', $participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante Tipos Solicitud Cotizacione'), array('action' => 'edit', $participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante Tipos Solicitud Cotizacione'), array('action' => 'delete', $participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id']), null, __('Are you sure you want to delete # %s?', $participanteTiposSolicitudCotizacione['ParticipanteTiposSolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos Solicitud Cotizaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipos Solicitud Cotizacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
