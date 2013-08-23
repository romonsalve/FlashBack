 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Evento Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("eventoTipos", array('controller' => 'EventoTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Evento Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Evento Tipo').' '; ?> <?php echo $eventoTipo['EventoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($eventoTipo['EventoTipo']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($eventoTipo['EventoTipo']['nombre'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $eventoTipo['EventoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $eventoTipo['EventoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Evento Tipo?', $eventoTipo['EventoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento Tipo'), array('action' => 'edit', $eventoTipo['EventoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento Tipo'), array('action' => 'delete', $eventoTipo['EventoTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTipo['EventoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Eventos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($eventoTipo['Evento'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Recinto Id'); ?></th>
		<th><?php echo __('Evento Tipo Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Fecha Inicio'); ?></th>
		<th><?php echo __('Fecha Termino'); ?></th>
		<th><?php echo __('Lista Invitados'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($eventoTipo['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['id']; ?></td>
			<td><?php echo $evento['recinto_id']; ?></td>
			<td><?php echo $evento['evento_tipo_id']; ?></td>
			<td><?php echo $evento['cliente_id']; ?></td>
			<td><?php echo $evento['nombre']; ?></td>
			<td><?php echo $evento['fecha_inicio']; ?></td>
			<td><?php echo $evento['fecha_termino']; ?></td>
			<td><?php echo $evento['lista_invitados']; ?></td>
			<td><?php echo $evento['estado']; ?></td>
			<td><?php echo $evento['precio']; ?></td>
			<td><?php echo $evento['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'eventos', 'action' => 'edit', $evento['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'eventos', 'action' => 'delete', $evento['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $evento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Solicitud Cotizaciones'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($eventoTipo['SolicitudCotizacione'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Evento Tipo Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Recinto Tipo Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($eventoTipo['SolicitudCotizacione'] as $solicitudCotizacione): ?>
		<tr>
			<td><?php echo $solicitudCotizacione['id']; ?></td>
			<td><?php echo $solicitudCotizacione['estado_id']; ?></td>
			<td><?php echo $solicitudCotizacione['evento_tipo_id']; ?></td>
			<td><?php echo $solicitudCotizacione['cliente_id']; ?></td>
			<td><?php echo $solicitudCotizacione['recinto_tipo_id']; ?></td>
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

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Actividades'); ?></h5>
                </a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($eventoTipo['Actividade'])): ?>
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
		foreach ($eventoTipo['Actividade'] as $actividade): ?>
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

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Participante Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse4" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($eventoTipo['ParticipanteTipo'])): ?>
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
		foreach ($eventoTipo['ParticipanteTipo'] as $participanteTipo): ?>
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Recinto Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse5" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($eventoTipo['RecintoTipo'])): ?>
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
		foreach ($eventoTipo['RecintoTipo'] as $recintoTipo): ?>
		<tr>
			<td><?php echo $recintoTipo['id']; ?></td>
			<td><?php echo $recintoTipo['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'recinto_tipos', 'action' => 'view', $recintoTipo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'recinto_tipos', 'action' => 'edit', $recintoTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'recinto_tipos', 'action' => 'delete', $recintoTipo['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $recintoTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Recurso Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse6" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($eventoTipo['RecursoTipo'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Clasificacion'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($eventoTipo['RecursoTipo'] as $recursoTipo): ?>
		<tr>
			<td><?php echo $recursoTipo['id']; ?></td>
			<td><?php echo $recursoTipo['nombre']; ?></td>
			<td><?php echo $recursoTipo['clasificacion']; ?></td>
			<td><?php echo $recursoTipo['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'recurso_tipos', 'action' => 'view', $recursoTipo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'recurso_tipos', 'action' => 'edit', $recursoTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'recurso_tipos', 'action' => 'delete', $recursoTipo['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $recursoTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
