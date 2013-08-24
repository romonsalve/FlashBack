<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Recursos", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Recursos</h3>
                    <!-- Para -->
                    <p>Listado de Recursos pertenecientes a su empresa, haga click en editar al lado del recurso necesario para modificar sus datos en el registro.</p>
		    <div style= "text-align: right; padding-right: 10%">
		    <?php echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar Recurso</button>", array("action" => "add"), array("escape" => false));
		    echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar Tipo de Recurso</button>", array("controller" => "recursoTipos", "action" => "add"), array("escape" => false));?>		     </div>
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

			<th><?php echo $this->Paginator->sort('recurso_tipo_id', 'Tipo de Recurso'); ?></th>
			<th><?php echo $this->Paginator->sort('proveedore_id', 'Proveedor'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad', 'Cantidad'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($recursos as $recurso): ?>
		<td>
			<?php echo $this->Html->link($recurso['RecursoTipo']['nombre'], array('controller' => 'recurso_tipos', 'action' => 'view', $recurso['RecursoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recurso['Proveedore']['id'], array('controller' => 'proveedores', 'action' => 'view', $recurso['Proveedore']['id'])); ?>
		</td>
		<td><?php echo h($recurso['Recurso']['cantidad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $recurso['Recurso']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $recurso['Recurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $recurso['Recurso']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $recurso['Recurso']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Recursos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
