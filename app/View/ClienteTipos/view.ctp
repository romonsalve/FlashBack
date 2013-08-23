 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Cliente Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("clienteTipos", array('controller' => 'ClienteTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Cliente Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Cliente Tipo').' '; ?> <?php echo $clienteTipo['ClienteTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($clienteTipo['ClienteTipo']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($clienteTipo['ClienteTipo']['nombre'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $clienteTipo['ClienteTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $clienteTipo['ClienteTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Cliente Tipo?', $clienteTipo['ClienteTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente Tipo'), array('action' => 'edit', $clienteTipo['ClienteTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente Tipo'), array('action' => 'delete', $clienteTipo['ClienteTipo']['id']), null, __('Are you sure you want to delete # %s?', $clienteTipo['ClienteTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Clientes'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($clienteTipo['Cliente'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Tipo Id'); ?></th>
		<th><?php echo __('Rut'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido Paterno'); ?></th>
		<th><?php echo __('Apellido Materno'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Fono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($clienteTipo['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['cliente_tipo_id']; ?></td>
			<td><?php echo $cliente['rut']; ?></td>
			<td><?php echo $cliente['nombre']; ?></td>
			<td><?php echo $cliente['apellido_paterno']; ?></td>
			<td><?php echo $cliente['apellido_materno']; ?></td>
			<td><?php echo $cliente['direccion']; ?></td>
			<td><?php echo $cliente['fono']; ?></td>
			<td><?php echo $cliente['correo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
