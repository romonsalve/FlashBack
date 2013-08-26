<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Vehiculos", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Vehiculos</h3>
                    <!-- Para -->
                    <p>Listado de vehículos relacionados con la empresa</p>
		    <div style= "text-align: right; padding-right: 10%">
		    <?php echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar Vehículo</button>", array("action" => "add"), array("escape" => false));
			  echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar Tipo de Vehículo</button>", array("controller" => "VehiculoTipos", "action" => "add"), array("escape" => false));?>		     </div>
                 </div>
                 <div class="ysheet2"></div>
                 <div class="ysheet3"></div>
              </div>
            </div>

          <!-- Sheet ends -->




	<?php $cantidad = $this->Paginator->counter(array('format' => __('{:count}') ));if( strcmp( $cantidad , '0') != 0 ){ ?> 
	
	<div class="box-body">
        <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
			<th><?php echo $this->Paginator->sort('vehiculo_tipo_id', 'vehiculo_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patente', 'patente'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo', 'modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('marca', 'marca'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion', 'descripcion'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($vehiculos as $vehiculo): ?>
		<td>
		</td>
		<td><?php echo h($vehiculo['Vehiculo']['patente']); ?>&nbsp;</td>
		<td><?php echo h($vehiculo['Vehiculo']['modelo']); ?>&nbsp;</td>
		<td><?php echo h($vehiculo['Vehiculo']['marca']); ?>&nbsp;</td>
		<td><?php echo h($vehiculo['Vehiculo']['descripcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver Detalles'), array('action' => 'view', $vehiculo['Vehiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $vehiculo['Vehiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $vehiculo['Vehiculo']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $vehiculo['Vehiculo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                      </table>
                    </div>
	<p>
	<?php 
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}. Se han encontrado: {:count} resultados ')
	));
	?>	</p>

	<?php $pag = $this->Paginator->counter(array('format' => __('{:pages}') ));if( strcmp( $pag , '1') != 0 ){ ?> 
	
	<div class="box-body">
		<ul class="pagination" style="text-align: center;">
		<ul>
	<?php
		echo $this->Paginator->prev('Anterior', array('tag' => 'li'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active activePaginacion','tag' => 'li'));
		echo $this->Paginator->next('Siguiente', array('tag' => 'li'));
	?>
		</ul>
		</ul>
	</div>
	 <?php } ?>		
	 <?php } 
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Vehiculos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
