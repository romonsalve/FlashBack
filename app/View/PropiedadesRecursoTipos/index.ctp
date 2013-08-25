<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Propiedades Recurso Tipos", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Restricciones de medidas</h3>
                    <!-- Para -->
                    <p>Listado de Restricciones disponibles para configurar a cada tipo de recurso en el sistema, para crear una restricción, primero debe marcar la propiedad que desee restringir en el tipo de recurso, editando un tipo de recurso. También puede indicar que cierto tipo de recurso utiliza cierta propiedad haciendo click en "Agregar Restricción"</p>
		    <div style= "text-align: right; padding-right: 10%">
		    <?php echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar Restricción</button>", array("action" => "add"), array("escape" => false));?>		     </div>
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
			<th><?php echo $this->Paginator->sort('propiedade_id', 'Propiedad'); ?></th>
			<th><?php echo $this->Paginator->sort('medida_id', 'Unidad de Medida'); ?></th>
			<th><?php echo $this->Paginator->sort('minimo_medida', 'Medida Mínima'); ?></th>
			<th><?php echo $this->Paginator->sort('maximo_medida', 'Medida Máxima'); ?></th>

			<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>
	<?php foreach ($propiedadesRecursoTipos as $propiedadesRecursoTipo): ?>
		<td>
			<?php echo $this->Html->link($propiedadesRecursoTipo['RecursoTipo']['nombre'], array('controller' => 'recurso_tipos', 'action' => 'view', $propiedadesRecursoTipo['RecursoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propiedadesRecursoTipo['Propiedade']['nombre'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecursoTipo['Propiedade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propiedadesRecursoTipo['Medida']['nombre'], array('controller' => 'medidas', 'action' => 'view', $propiedadesRecursoTipo['Medida']['nombre'])); ?>
		</td>
		<td><?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['minimo_medida']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['maximo_medida']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Propiedades Recurso Tipos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
