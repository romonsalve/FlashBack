 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Recurso'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("recursos", array('controller' => 'Recurso', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Recurso", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Recurso').' '; ?> <?php echo $recurso['Recurso']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recurso['Recurso']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recurso Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($recurso['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $recurso['RecursoTipo']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Proveedore</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($recurso['Proveedore']['id'], array('controller' => 'proveedores', 'action' => 'view', $recurso['Proveedore']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Cantidad </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recurso['Recurso']['cantidad'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $recurso['Recurso']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $recurso['Recurso']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Recurso?', $recurso['Recurso']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurso'), array('action' => 'edit', $recurso['Recurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recurso'), array('action' => 'delete', $recurso['Recurso']['id']), null, __('Are you sure you want to delete # %s?', $recurso['Recurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
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

	<?php if (!empty($recurso['Evento'])): ?>
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
		foreach ($recurso['Evento'] as $evento): ?>
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Propiedades'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($recurso['Propiedade'])): ?>
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
		foreach ($recurso['Propiedade'] as $propiedade): ?>
		<tr>
			<td><?php echo $propiedade['id']; ?></td>
			<td><?php echo $propiedade['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'propiedades', 'action' => 'view', $propiedade['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'propiedades', 'action' => 'edit', $propiedade['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'propiedades', 'action' => 'delete', $propiedade['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $propiedade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
