 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Actividades Solicitud Cotizacione'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("actividadesSolicitudCotizaciones", array('controller' => 'ActividadesSolicitudCotizacione', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Actividades Solicitud Cotizacione", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Actividades Solicitud Cotizacione').' '; ?> <?php echo $actividadesSolicitudCotizacione['ActividadesSolicitudCotizacione']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<li><?php echo "<div class='col-l' style = 'text-align: right;'> Solicitud Cotizaciones</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesSolicitudCotizacione['SolicitudCotizaciones']['id'], array('controller' => 'solicitud_cotizaciones', 'action' => 'view', $actividadesSolicitudCotizacione['SolicitudCotizaciones']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Actividades</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesSolicitudCotizacione['Actividades']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesSolicitudCotizacione['Actividades']['id']))." &nbsp</div>"; ?> </li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $actividadesSolicitudCotizacione['ActividadesSolicitudCotizacione']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $actividadesSolicitudCotizacione['ActividadesSolicitudCotizacione']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Actividades Solicitud Cotizacione?', $actividadesSolicitudCotizacione['ActividadesSolicitudCotizacione']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Solicitud Cotizacione'), array('action' => 'edit', $actividadesSolicitudCotizacione['ActividadesSolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Solicitud Cotizacione'), array('action' => 'delete', $actividadesSolicitudCotizacione['ActividadesSolicitudCotizacione']['id']), null, __('Are you sure you want to delete # %s?', $actividadesSolicitudCotizacione['ActividadesSolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Solicitud Cotizaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Solicitud Cotizacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
