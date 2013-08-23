<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Bitacoras", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Bitacoras</h3>
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
			<th><?php echo $this->Paginator->sort('evento_id', 'evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vehiculo_id', 'vehiculo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_inicio', 'hora_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_termino', 'hora_termino'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion', 'descripcion'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($bitacoras as $bitacora): ?>
		<td><?php echo h($bitacora['Bitacora']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bitacora['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $bitacora['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bitacora['Vehiculo']['id'], array('controller' => 'vehiculos', 'action' => 'view', $bitacora['Vehiculo']['id'])); ?>
		</td>
		<td><?php echo h($bitacora['Bitacora']['hora_inicio']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['hora_termino']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['descripcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $bitacora['Bitacora']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $bitacora['Bitacora']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Bitacoras</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
