 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Cliente'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Cliente'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Cliente').' '; ?> <?php echo $cliente['Cliente']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Cliente Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($cliente['ClienteTipo']['id'], array('controller' => 'cliente_tipos', 'action' => 'view', $cliente['ClienteTipo']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Rut Cli </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['rut_cli'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Cli </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['nombre_cli'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellidom Cli </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['apellidom_cli'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellidop Cli </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['apellidop_cli'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Direccion Cli </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['direccion_cli'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono Cli </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['fono_cli'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo Cli </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['correo_cli'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $cliente['Cliente']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Cliente?', $cliente['Cliente']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('controller' => 'cliente_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Tipo'), array('controller' => 'cliente_tipos', 'action' => 'add')); ?> </li>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Eventos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($cliente['Evento'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Tipo Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Recinto Id'); ?></th>
		<th><?php echo __('Estado Evento Id'); ?></th>
		<th><?php echo __('Nombre Evento'); ?></th>
		<th><?php echo __('Fecha De Inicio'); ?></th>
		<th><?php echo __('Fecha De Termino'); ?></th>
		<th><?php echo __('Precio Evento'); ?></th>
		<th><?php echo __('Lista Invitados'); ?></th>
		<th><?php echo __('Descripcion Evento'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($cliente['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['id']; ?></td>
			<td><?php echo $evento['evento_tipo_id']; ?></td>
			<td><?php echo $evento['cliente_id']; ?></td>
			<td><?php echo $evento['recinto_id']; ?></td>
			<td><?php echo $evento['estado_evento_id']; ?></td>
			<td><?php echo $evento['nombre_evento']; ?></td>
			<td><?php echo $evento['fecha_de_inicio']; ?></td>
			<td><?php echo $evento['fecha_de_termino']; ?></td>
			<td><?php echo $evento['precio_evento']; ?></td>
			<td><?php echo $evento['lista_invitados']; ?></td>
			<td><?php echo $evento['descripcion_evento']; ?></td>
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

	<?php if (!empty($cliente['SolicitudCotizacione'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Evento Tipo Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Recinto Tipo Id'); ?></th>
		<th><?php echo __('Nombre Cot'); ?></th>
		<th><?php echo __('Desc Cot'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($cliente['SolicitudCotizacione'] as $solicitudCotizacione): ?>
		<tr>
			<td><?php echo $solicitudCotizacione['id']; ?></td>
			<td><?php echo $solicitudCotizacione['estado_id']; ?></td>
			<td><?php echo $solicitudCotizacione['evento_tipo_id']; ?></td>
			<td><?php echo $solicitudCotizacione['cliente_id']; ?></td>
			<td><?php echo $solicitudCotizacione['recinto_tipo_id']; ?></td>
			<td><?php echo $solicitudCotizacione['nombre_cot']; ?></td>
			<td><?php echo $solicitudCotizacione['desc_cot']; ?></td>
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
                
