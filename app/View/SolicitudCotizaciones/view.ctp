 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Solicitud Cotizacione'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("solicitudCotizaciones", array('controller' => 'SolicitudCotizacione', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Solicitud Cotizacione", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Solicitud Cotizacione').' '; ?> <?php echo $solicitudCotizacione['SolicitudCotizacione']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($solicitudCotizacione['SolicitudCotizacione']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Estados</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($solicitudCotizacione['Estados']['id'], array('controller' => 'estados', 'action' => 'view', $solicitudCotizacione['Estados']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento Tipos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($solicitudCotizacione['EventoTipos']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $solicitudCotizacione['EventoTipos']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Clientes</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($solicitudCotizacione['Clientes']['id'], array('controller' => 'clientes', 'action' => 'view', $solicitudCotizacione['Clientes']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recinto Tipos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($solicitudCotizacione['RecintoTipos']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $solicitudCotizacione['RecintoTipos']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($solicitudCotizacione['SolicitudCotizacione']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($solicitudCotizacione['SolicitudCotizacione']['descripcion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $solicitudCotizacione['SolicitudCotizacione']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $solicitudCotizacione['SolicitudCotizacione']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Solicitud Cotizacione?', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitud Cotizacione'), array('action' => 'edit', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitud Cotizacione'), array('action' => 'delete', $solicitudCotizacione['SolicitudCotizacione']['id']), null, __('Are you sure you want to delete # %s?', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estados'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientes'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Participante Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($solicitudCotizacione['ParticipanteTipo'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($solicitudCotizacione['ParticipanteTipo'] as $participanteTipo): ?>
		<tr>
			<td><?php echo $participanteTipo['id']; ?></td>
			<td><?php echo $participanteTipo['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'participante_tipos', 'action' => 'view', $participanteTipo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'participante_tipos', 'action' => 'edit', $participanteTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'participante_tipos', 'action' => 'delete', $participanteTipo['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $participanteTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Actividades'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($solicitudCotizacione['Actividade'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($solicitudCotizacione['Actividade'] as $actividade): ?>
		<tr>
			<td><?php echo $actividade['id']; ?></td>
			<td><?php echo $actividade['nombre']; ?></td>
			<td><?php echo $actividade['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'actividades', 'action' => 'view', $actividade['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'actividades', 'action' => 'edit', $actividade['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'actividades', 'action' => 'delete', $actividade['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $actividade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
