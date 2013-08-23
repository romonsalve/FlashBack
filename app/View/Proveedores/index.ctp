<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Proveedores", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Proveedores</h3>
                    <!-- Para -->
                    <p>Listado de ...</p>
		    <div style= "text-align: right; padding-right: 10%">
		    <?php echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar</button>", array("action" => "add"), array("escape" => false));?>		     </div>
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

			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('rut', 'rut'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion', 'direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('fono', 'fono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo', 'correo'); ?></th>
			<th><?php echo $this->Paginator->sort('ranking', 'ranking'); ?></th>
			<th><?php echo $this->Paginator->sort('contrato', 'contrato'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_contacto', 'nombre_contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_contacto', 'apellido_contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_contacto', 'correo_contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('fono_contacto', 'fono_contacto'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($proveedores as $proveedore): ?>
		<td><?php echo h($proveedore['Proveedore']['id']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['rut']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['fono']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['correo']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['ranking']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['contrato']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['nombre_contacto']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['apellido_contacto']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['correo_contacto']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['fono_contacto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proveedore['Proveedore']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $proveedore['Proveedore']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $proveedore['Proveedore']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Proveedores</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
