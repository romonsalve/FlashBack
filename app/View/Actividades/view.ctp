 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Actividade'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("actividades", array('controller' => 'Actividade', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Actividade", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Actividade').' '; ?> <?php echo $actividade['Actividade']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividade['Actividade']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividade['Actividade']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividade['Actividade']['descripcion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $actividade['Actividade']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $actividade['Actividade']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Actividade?', $actividade['Actividade']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividade'), array('action' => 'edit', $actividade['Actividade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividade'), array('action' => 'delete', $actividade['Actividade']['id']), null, __('Are you sure you want to delete # %s?', $actividade['Actividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Evento Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($actividade['EventoTipo'])): ?>
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
		foreach ($actividade['EventoTipo'] as $eventoTipo): ?>
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Eventos'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($actividade['Evento'])): ?>
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
		foreach ($actividade['Evento'] as $evento): ?>
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Solicitud Cotizaciones'); ?></h5>
                </a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($actividade['SolicitudCotizacione'])): ?>
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
		foreach ($actividade['SolicitudCotizacione'] as $solicitudCotizacione): ?>
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


</div>

</div>
</div>
</div>
                
