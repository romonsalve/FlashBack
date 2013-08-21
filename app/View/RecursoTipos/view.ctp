 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Recurso Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Recurso Tipo'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Recurso Tipo').' '; ?> <?php echo $recursoTipo['RecursoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recursoTipo['RecursoTipo']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Rect </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recursoTipo['RecursoTipo']['nombre_rect'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Clasif Rect </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recursoTipo['RecursoTipo']['clasif_rect'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Desc Rect </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recursoTipo['RecursoTipo']['desc_rect'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $recursoTipo['RecursoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $recursoTipo['RecursoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Recurso Tipo?', $recursoTipo['RecursoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurso Tipo'), array('action' => 'edit', $recursoTipo['RecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recurso Tipo'), array('action' => 'delete', $recursoTipo['RecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $recursoTipo['RecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
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

	<?php if (!empty($recursoTipo['Recurso'])): ?>
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
		foreach ($recursoTipo['Recurso'] as $recurso): ?>
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Evento Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($recursoTipo['EventoTipo'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Evt'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($recursoTipo['EventoTipo'] as $eventoTipo): ?>
		<tr>
			<td><?php echo $eventoTipo['id']; ?></td>
			<td><?php echo $eventoTipo['nombre_evt']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'evento_tipos', 'action' => 'view', $eventoTipo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'evento_tipos', 'action' => 'edit', $eventoTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'evento_tipos', 'action' => 'delete', $eventoTipo['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $eventoTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Propiedades'); ?></h5>
                </a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($recursoTipo['Propiedade'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Prop'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($recursoTipo['Propiedade'] as $propiedade): ?>
		<tr>
			<td><?php echo $propiedade['id']; ?></td>
			<td><?php echo $propiedade['nombre_prop']; ?></td>
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

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Proveedores'); ?></h5>
                </a>
            </div>
            <div id="collapse4" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($recursoTipo['Proveedore'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rut Pro'); ?></th>
		<th><?php echo __('Nombre Pro'); ?></th>
		<th><?php echo __('Direccion Pro'); ?></th>
		<th><?php echo __('Fono Pro'); ?></th>
		<th><?php echo __('Correo Pro'); ?></th>
		<th><?php echo __('Ranking Pro'); ?></th>
		<th><?php echo __('Contrato Pro'); ?></th>
		<th><?php echo __('Nombre Conta'); ?></th>
		<th><?php echo __('Apellido Conta'); ?></th>
		<th><?php echo __('Correo Conta'); ?></th>
		<th><?php echo __('Fono Conta'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($recursoTipo['Proveedore'] as $proveedore): ?>
		<tr>
			<td><?php echo $proveedore['id']; ?></td>
			<td><?php echo $proveedore['rut_pro']; ?></td>
			<td><?php echo $proveedore['nombre_pro']; ?></td>
			<td><?php echo $proveedore['direccion_pro']; ?></td>
			<td><?php echo $proveedore['fono_pro']; ?></td>
			<td><?php echo $proveedore['correo_pro']; ?></td>
			<td><?php echo $proveedore['ranking_pro']; ?></td>
			<td><?php echo $proveedore['contrato_pro']; ?></td>
			<td><?php echo $proveedore['nombre_conta']; ?></td>
			<td><?php echo $proveedore['apellido_conta']; ?></td>
			<td><?php echo $proveedore['correo_conta']; ?></td>
			<td><?php echo $proveedore['fono_conta']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'proveedores', 'action' => 'view', $proveedore['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'proveedores', 'action' => 'edit', $proveedore['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'proveedores', 'action' => 'delete', $proveedore['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $proveedore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
