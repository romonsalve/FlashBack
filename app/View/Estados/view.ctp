 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Estado'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("estados", array('controller' => 'Estado', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Estado", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Estado').' '; ?> <?php echo $estado['Estado']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($estado['Estado']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($estado['Estado']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($estado['Estado']['descripcion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estado['Estado']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $estado['Estado']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Estado?', $estado['Estado']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), null, __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Solicitud Cotizaciones'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($estado['SolicitudCotizacione'])): ?>
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
		foreach ($estado['SolicitudCotizacione'] as $solicitudCotizacione): ?>
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
                
