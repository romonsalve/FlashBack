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

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Evento'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Evento').' '; ?> <?php echo $evento['Evento']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($evento['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $evento['EventoTipo']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Cliente</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($evento['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $evento['Cliente']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recinto</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($evento['Recinto']['id'], array('controller' => 'recintos', 'action' => 'view', $evento['Recinto']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Estado Evento</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($evento['EstadoEvento']['id'], array('controller' => 'estado_eventos', 'action' => 'view', $evento['EstadoEvento']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Evento </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['nombre_evento'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha De Inicio </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['fecha_de_inicio'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha De Termino </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['fecha_de_termino'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Precio Evento </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['precio_evento'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Lista Invitados </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['lista_invitados'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion Evento </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($evento['Evento']['descripcion_evento'])." &nbsp</div>";  ?></li></ul>
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
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('controller' => 'recintos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto'), array('controller' => 'recintos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Eventos'), array('controller' => 'estado_eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Evento'), array('controller' => 'estado_eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itinerario Participantes'), array('controller' => 'itinerario_participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itinerario Participante'), array('controller' => 'itinerario_participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Itinerario Participantes'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($evento['ItinerarioParticipante'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Participante Id'); ?></th>
		<th><?php echo __('Hora Ini Par'); ?></th>
		<th><?php echo __('Hora Ter Par'); ?></th>
		<th><?php echo __('Desc Iti Par'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($evento['ItinerarioParticipante'] as $itinerarioParticipante): ?>
		<tr>
			<td><?php echo $itinerarioParticipante['id']; ?></td>
			<td><?php echo $itinerarioParticipante['evento_id']; ?></td>
			<td><?php echo $itinerarioParticipante['participante_id']; ?></td>
			<td><?php echo $itinerarioParticipante['hora_ini_par']; ?></td>
			<td><?php echo $itinerarioParticipante['hora_ter_par']; ?></td>
			<td><?php echo $itinerarioParticipante['desc_iti_par']; ?></td>
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Bitacoras'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($evento['Bitacora'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Vehiculo Id'); ?></th>
		<th><?php echo __('Hora Ini Bit'); ?></th>
		<th><?php echo __('Hora Ter Bit'); ?></th>
		<th><?php echo __('Desc Bit'); ?></th>
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
			<td><?php echo $bitacora['hora_ini_bit']; ?></td>
			<td><?php echo $bitacora['hora_ter_bit']; ?></td>
			<td><?php echo $bitacora['desc_bit']; ?></td>
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
		<th><?php echo __('Recurso Tipo Id'); ?></th>
		<th><?php echo __('Proveedore Id'); ?></th>
		<th><?php echo __('Cantidad Rec'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($evento['Recurso'] as $recurso): ?>
		<tr>
			<td><?php echo $recurso['id']; ?></td>
			<td><?php echo $recurso['recurso_tipo_id']; ?></td>
			<td><?php echo $recurso['proveedore_id']; ?></td>
			<td><?php echo $recurso['cantidad_rec']; ?></td>
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
		<th><?php echo __('Rut Emp'); ?></th>
		<th><?php echo __('Nombre Emp'); ?></th>
		<th><?php echo __('Apellidom Emp'); ?></th>
		<th><?php echo __('Apellidop Emp'); ?></th>
		<th><?php echo __('Direccion Emp'); ?></th>
		<th><?php echo __('Fono Emp'); ?></th>
		<th><?php echo __('Correo Emp'); ?></th>
		<th><?php echo __('Contrato Emp'); ?></th>
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
			<td><?php echo $empleado['rut_emp']; ?></td>
			<td><?php echo $empleado['nombre_emp']; ?></td>
			<td><?php echo $empleado['apellidom_emp']; ?></td>
			<td><?php echo $empleado['apellidop_emp']; ?></td>
			<td><?php echo $empleado['direccion_emp']; ?></td>
			<td><?php echo $empleado['fono_emp']; ?></td>
			<td><?php echo $empleado['correo_emp']; ?></td>
			<td><?php echo $empleado['contrato_emp']; ?></td>
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
		<th><?php echo __('Nombre Act'); ?></th>
		<th><?php echo __('Desc Act'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($evento['Actividade'] as $actividade): ?>
		<tr>
			<td><?php echo $actividade['id']; ?></td>
			<td><?php echo $actividade['nombre_act']; ?></td>
			<td><?php echo $actividade['desc_act']; ?></td>
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
                
