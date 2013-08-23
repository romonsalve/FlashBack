 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Evento'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("eventos", array('controller' => 'Evento', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Evento", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Evento').' '; ?> <?php echo $evento['Evento']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recintos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($evento['Recintos']['id'], array('controller' => 'recintos', 'action' => 'view', $evento['Recintos']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento Tipos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($evento['EventoTipos']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $evento['EventoTipos']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Clientes</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($evento['Clientes']['id'], array('controller' => 'clientes', 'action' => 'view', $evento['Clientes']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha Inicio </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['fecha_inicio'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha Termino </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['fecha_termino'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Lista Invitados </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['lista_invitados'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Estado </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['estado'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Precio </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['precio'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['descripcion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $evento['Evento']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $evento['Evento']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Evento?', $evento['Evento']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento'), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento'), array('action' => 'delete', $evento['Evento']['id']), null, __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('controller' => 'recintos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recintos'), array('controller' => 'recintos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientes'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('controller' => 'itinerario_participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('controller' => 'itinerario_participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Bitacoras'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($evento['Bitacora'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Vehiculo Id'); ?></th>
		<th><?php echo __('Hora Inicio'); ?></th>
		<th><?php echo __('Hora Termino'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($evento['Bitacora'] as $bitacora): ?>
		<tr>
			<td><?php echo $bitacora['id']; ?></td>
			<td><?php echo $bitacora['evento_id']; ?></td>
			<td><?php echo $bitacora['vehiculo_id']; ?></td>
			<td><?php echo $bitacora['hora_inicio']; ?></td>
			<td><?php echo $bitacora['hora_termino']; ?></td>
			<td><?php echo $bitacora['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'bitacoras', 'action' => 'view', $bitacora['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'bitacoras', 'action' => 'edit', $bitacora['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'bitacoras', 'action' => 'delete', $bitacora['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $bitacora['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Itinerario Participantes'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($evento['ItinerarioParticipante'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Participante Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Hora Inicio'); ?></th>
		<th><?php echo __('Hora Termino'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($evento['ItinerarioParticipante'] as $itinerarioParticipante): ?>
		<tr>
			<td><?php echo $itinerarioParticipante['id']; ?></td>
			<td><?php echo $itinerarioParticipante['participante_id']; ?></td>
			<td><?php echo $itinerarioParticipante['evento_id']; ?></td>
			<td><?php echo $itinerarioParticipante['hora_inicio']; ?></td>
			<td><?php echo $itinerarioParticipante['hora_termino']; ?></td>
			<td><?php echo $itinerarioParticipante['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'itinerario_participantes', 'action' => 'view', $itinerarioParticipante['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'itinerario_participantes', 'action' => 'edit', $itinerarioParticipante['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'itinerario_participantes', 'action' => 'delete', $itinerarioParticipante['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $itinerarioParticipante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Itinerario Participante'), array('controller' => 'itinerario_participantes', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Recursos'); ?></h5>
                </a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($evento['Recurso'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Recurso Tipos Id'); ?></th>
		<th><?php echo __('Proveedores Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($evento['Recurso'] as $recurso): ?>
		<tr>
			<td><?php echo $recurso['id']; ?></td>
			<td><?php echo $recurso['recurso_tipos_id']; ?></td>
			<td><?php echo $recurso['proveedores_id']; ?></td>
			<td><?php echo $recurso['cantidad']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'recursos', 'action' => 'view', $recurso['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'recursos', 'action' => 'edit', $recurso['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'recursos', 'action' => 'delete', $recurso['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $recurso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Empleados'); ?></h5>
                </a>
            </div>
            <div id="collapse4" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($evento['Empleado'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empleado Tipo Id'); ?></th>
		<th><?php echo __('Rut'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido Paterno'); ?></th>
		<th><?php echo __('Apellido Materno'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Fono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Contrato'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($evento['Empleado'] as $empleado): ?>
		<tr>
			<td><?php echo $empleado['id']; ?></td>
			<td><?php echo $empleado['empleado_tipo_id']; ?></td>
			<td><?php echo $empleado['rut']; ?></td>
			<td><?php echo $empleado['nombre']; ?></td>
			<td><?php echo $empleado['apellido_paterno']; ?></td>
			<td><?php echo $empleado['apellido_materno']; ?></td>
			<td><?php echo $empleado['direccion']; ?></td>
			<td><?php echo $empleado['fono']; ?></td>
			<td><?php echo $empleado['correo']; ?></td>
			<td><?php echo $empleado['contrato']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'empleados', 'action' => 'view', $empleado['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'empleados', 'action' => 'edit', $empleado['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'empleados', 'action' => 'delete', $empleado['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $empleado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Actividades'); ?></h5>
                </a>
            </div>
            <div id="collapse5" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($evento['Actividade'])): ?>
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
		foreach ($evento['Actividade'] as $actividade): ?>
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
                
