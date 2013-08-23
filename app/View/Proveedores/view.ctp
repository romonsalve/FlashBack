 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Proveedore'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("proveedores", array('controller' => 'Proveedore', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Proveedore", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Proveedore').' '; ?> <?php echo $proveedore['Proveedore']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Rut </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['rut'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Direccion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['direccion'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['fono'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['correo'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Ranking </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['ranking'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Contrato </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['contrato'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Contacto </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['nombre_contacto'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Contacto </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['apellido_contacto'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo Contacto </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['correo_contacto'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono Contacto </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['fono_contacto'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proveedore['Proveedore']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proveedore['Proveedore']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Proveedore?', $proveedore['Proveedore']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedore'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedore'), array('action' => 'delete', $proveedore['Proveedore']['id']), null, __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('action' => 'add')); ?> </li>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Recurso Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($proveedore['RecursoTipo'])): ?>
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
		foreach ($proveedore['RecursoTipo'] as $recursoTipo): ?>
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
                
