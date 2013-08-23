 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Vehiculo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("vehiculos", array('controller' => 'Vehiculo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Vehiculo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Vehiculo').' '; ?> <?php echo $vehiculo['Vehiculo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($vehiculo['Vehiculo']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Vehiculo Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($vehiculo['VehiculoTipo']['id'], array('controller' => 'vehiculo_tipos', 'action' => 'view', $vehiculo['VehiculoTipo']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Patente </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($vehiculo['Vehiculo']['patente'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Modelo </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($vehiculo['Vehiculo']['modelo'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Marca </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($vehiculo['Vehiculo']['marca'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($vehiculo['Vehiculo']['descripcion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $vehiculo['Vehiculo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $vehiculo['Vehiculo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Vehiculo?', $vehiculo['Vehiculo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehiculo'), array('action' => 'edit', $vehiculo['Vehiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehiculo'), array('action' => 'delete', $vehiculo['Vehiculo']['id']), null, __('Are you sure you want to delete # %s?', $vehiculo['Vehiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('controller' => 'vehiculo_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo Tipo'), array('controller' => 'vehiculo_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
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

	<?php if (!empty($vehiculo['Bitacora'])): ?>
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
		foreach ($vehiculo['Bitacora'] as $bitacora): ?>
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


</div>

</div>
</div>
</div>
                
