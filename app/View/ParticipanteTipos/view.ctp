 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Participante Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("participanteTipos", array('controller' => 'ParticipanteTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Participante Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Participante Tipo').' '; ?> <?php echo $participanteTipo['ParticipanteTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participanteTipo['ParticipanteTipo']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participanteTipo['ParticipanteTipo']['nombre'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $participanteTipo['ParticipanteTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $participanteTipo['ParticipanteTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Participante Tipo?', $participanteTipo['ParticipanteTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante Tipo'), array('action' => 'edit', $participanteTipo['ParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante Tipo'), array('action' => 'delete', $participanteTipo['ParticipanteTipo']['id']), null, __('Are you sure you want to delete # %s?', $participanteTipo['ParticipanteTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Participantes'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($participanteTipo['Participante'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Participante Tipo Id'); ?></th>
		<th><?php echo __('Nombre Artistico'); ?></th>
		<th><?php echo __('Contrato'); ?></th>
		<th><?php echo __('Ranking'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Rut'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido Paterno'); ?></th>
		<th><?php echo __('Apellido Materno'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Fono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($participanteTipo['Participante'] as $participante): ?>
		<tr>
			<td><?php echo $participante['id']; ?></td>
			<td><?php echo $participante['participante_tipo_id']; ?></td>
			<td><?php echo $participante['nombre_artistico']; ?></td>
			<td><?php echo $participante['contrato']; ?></td>
			<td><?php echo $participante['ranking']; ?></td>
			<td><?php echo $participante['descripcion']; ?></td>
			<td><?php echo $participante['rut']; ?></td>
			<td><?php echo $participante['nombre']; ?></td>
			<td><?php echo $participante['apellido_paterno']; ?></td>
			<td><?php echo $participante['apellido_materno']; ?></td>
			<td><?php echo $participante['direccion']; ?></td>
			<td><?php echo $participante['fono']; ?></td>
			<td><?php echo $participante['correo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'participantes', 'action' => 'view', $participante['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'participantes', 'action' => 'edit', $participante['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'participantes', 'action' => 'delete', $participante['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $participante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Evento Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($participanteTipo['EventoTipo'])): ?>
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
		foreach ($participanteTipo['EventoTipo'] as $eventoTipo): ?>
		<tr>
			<td><?php echo $eventoTipo['id']; ?></td>
			<td><?php echo $eventoTipo['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'evento_tipos', 'action' => 'view', $eventoTipo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'evento_tipos', 'action' => 'edit', $eventoTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'evento_tipos', 'action' => 'delete', $eventoTipo['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $eventoTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Solicitud Cotizaciones'); ?></h5>
                </a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($participanteTipo['SolicitudCotizacione'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estados Id'); ?></th>
		<th><?php echo __('Evento Tipos Id'); ?></th>
		<th><?php echo __('Clientes Id'); ?></th>
		<th><?php echo __('Recinto Tipos Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($participanteTipo['SolicitudCotizacione'] as $solicitudCotizacione): ?>
		<tr>
			<td><?php echo $solicitudCotizacione['id']; ?></td>
			<td><?php echo $solicitudCotizacione['estados_id']; ?></td>
			<td><?php echo $solicitudCotizacione['evento_tipos_id']; ?></td>
			<td><?php echo $solicitudCotizacione['clientes_id']; ?></td>
			<td><?php echo $solicitudCotizacione['recinto_tipos_id']; ?></td>
			<td><?php echo $solicitudCotizacione['nombre']; ?></td>
			<td><?php echo $solicitudCotizacione['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'solicitud_cotizaciones', 'action' => 'view', $solicitudCotizacione['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'solicitud_cotizaciones', 'action' => 'edit', $solicitudCotizacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'solicitud_cotizaciones', 'action' => 'delete', $solicitudCotizacione['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $solicitudCotizacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
