<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Clientes", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Clientes</h3>
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
			<th><?php echo $this->Paginator->sort('cliente_tipos_id', 'cliente_tipos_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rut', 'rut'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno', 'apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno', 'apellido_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion', 'direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('fono', 'fono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo', 'correo'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($clientes as $cliente): ?>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['ClienteTipos']['id'], array('controller' => 'cliente_tipos', 'action' => 'view', $cliente['ClienteTipos']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['rut']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['fono']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['correo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $cliente['Cliente']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Clientes</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
