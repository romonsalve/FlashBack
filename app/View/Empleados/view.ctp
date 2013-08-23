 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Empleado'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("empleados", array('controller' => 'Empleado', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Empleado", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Empleado').' '; ?> <?php echo $empleado['Empleado']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Empleado Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($empleado['EmpleadoTipo']['id'], array('controller' => 'empleado_tipos', 'action' => 'view', $empleado['EmpleadoTipo']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Rut </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['rut'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Paterno </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['apellido_paterno'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Materno </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['apellido_materno'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Direccion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['direccion'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['fono'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['correo'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Contrato </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleado['Empleado']['contrato'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $empleado['Empleado']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $empleado['Empleado']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Empleado?', $empleado['Empleado']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleado'), array('action' => 'edit', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleado'), array('action' => 'delete', $empleado['Empleado']['id']), null, __('Are you sure you want to delete # %s?', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('controller' => 'empleado_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado Tipo'), array('controller' => 'empleado_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
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

	<?php if (!empty($empleado['Evento'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Recintos Id'); ?></th>
		<th><?php echo __('Evento Tipos Id'); ?></th>
		<th><?php echo __('Clientes Id'); ?></th>
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
		foreach ($empleado['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['id']; ?></td>
			<td><?php echo $evento['recintos_id']; ?></td>
			<td><?php echo $evento['evento_tipos_id']; ?></td>
			<td><?php echo $evento['clientes_id']; ?></td>
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


</div>

</div>
</div>
</div>
                
