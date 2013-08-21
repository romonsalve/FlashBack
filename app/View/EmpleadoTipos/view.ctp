 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Empleado Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Empleado Tipo'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Empleado Tipo').' '; ?> <?php echo $empleadoTipo['EmpleadoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleadoTipo['EmpleadoTipo']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Empt </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleadoTipo['EmpleadoTipo']['nombre_empt'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $empleadoTipo['EmpleadoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $empleadoTipo['EmpleadoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Empleado Tipo?', $empleadoTipo['EmpleadoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleado Tipo'), array('action' => 'edit', $empleadoTipo['EmpleadoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleado Tipo'), array('action' => 'delete', $empleadoTipo['EmpleadoTipo']['id']), null, __('Are you sure you want to delete # %s?', $empleadoTipo['EmpleadoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleado Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Empleados'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($empleadoTipo['Empleado'])): ?>
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
		foreach ($empleadoTipo['Empleado'] as $empleado): ?>
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


</div>

</div>
</div>
</div>
                
