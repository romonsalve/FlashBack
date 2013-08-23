 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Propiedade'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("propiedades", array('controller' => 'Propiedade', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Propiedade", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Propiedade').' '; ?> <?php echo $propiedade['Propiedade']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($propiedade['Propiedade']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($propiedade['Propiedade']['nombre'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedade['Propiedade']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propiedade['Propiedade']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Propiedade?', $propiedade['Propiedade']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propiedade'), array('action' => 'edit', $propiedade['Propiedade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propiedade'), array('action' => 'delete', $propiedade['Propiedade']['id']), null, __('Are you sure you want to delete # %s?', $propiedade['Propiedade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Recursos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($propiedade['Recurso'])): ?>
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
		foreach ($propiedade['Recurso'] as $recurso): ?>
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Medidas'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($propiedade['Medida'])): ?>
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
		foreach ($propiedade['Medida'] as $medida): ?>
		<tr>
			<td><?php echo $medida['id']; ?></td>
			<td><?php echo $medida['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'medidas', 'action' => 'view', $medida['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'medidas', 'action' => 'edit', $medida['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'medidas', 'action' => 'delete', $medida['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $medida['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Recurso Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($propiedade['RecursoTipo'])): ?>
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
		foreach ($propiedade['RecursoTipo'] as $recursoTipo): ?>
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
                
