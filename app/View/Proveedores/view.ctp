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

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Proveedore'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Proveedore').' '; ?> <?php echo $proveedore['Proveedore']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Rut Pro </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['rut_pro'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Pro </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['nombre_pro'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Direccion Pro </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['direccion_pro'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono Pro </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['fono_pro'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo Pro </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['correo_pro'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Ranking Pro </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['ranking_pro'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Contrato Pro </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['contrato_pro'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Conta </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['nombre_conta'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Conta </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['apellido_conta'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo Conta </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['correo_conta'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono Conta </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($proveedore['Proveedore']['fono_conta'])." &nbsp</div>";  ?></li></ul>
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
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
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

	<?php if (!empty($proveedore['Recurso'])): ?>
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
		foreach ($proveedore['Recurso'] as $recurso): ?>
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
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Recurso Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($proveedore['RecursoTipo'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Rect'); ?></th>
		<th><?php echo __('Clasif Rect'); ?></th>
		<th><?php echo __('Desc Rect'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($proveedore['RecursoTipo'] as $recursoTipo): ?>
		<tr>
			<td><?php echo $recursoTipo['id']; ?></td>
			<td><?php echo $recursoTipo['nombre_rect']; ?></td>
			<td><?php echo $recursoTipo['clasif_rect']; ?></td>
			<td><?php echo $recursoTipo['desc_rect']; ?></td>
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
                
