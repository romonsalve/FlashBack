 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Vehiculo Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("vehiculoTipos", array('controller' => 'VehiculoTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Vehiculo Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Vehiculo Tipo').' '; ?> <?php echo $vehiculoTipo['VehiculoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($vehiculoTipo['VehiculoTipo']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($vehiculoTipo['VehiculoTipo']['nombre'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $vehiculoTipo['VehiculoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $vehiculoTipo['VehiculoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Vehiculo Tipo?', $vehiculoTipo['VehiculoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehiculo Tipo'), array('action' => 'edit', $vehiculoTipo['VehiculoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehiculo Tipo'), array('action' => 'delete', $vehiculoTipo['VehiculoTipo']['id']), null, __('Are you sure you want to delete # %s?', $vehiculoTipo['VehiculoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Vehiculos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($vehiculoTipo['Vehiculo'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vehiculo Tipo Id'); ?></th>
		<th><?php echo __('Patente'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Marca'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($vehiculoTipo['Vehiculo'] as $vehiculo): ?>
		<tr>
			<td><?php echo $vehiculo['id']; ?></td>
			<td><?php echo $vehiculo['vehiculo_tipo_id']; ?></td>
			<td><?php echo $vehiculo['patente']; ?></td>
			<td><?php echo $vehiculo['modelo']; ?></td>
			<td><?php echo $vehiculo['marca']; ?></td>
			<td><?php echo $vehiculo['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'vehiculos', 'action' => 'view', $vehiculo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'vehiculos', 'action' => 'edit', $vehiculo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'vehiculos', 'action' => 'delete', $vehiculo['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $vehiculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
