<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Propiedades Recursos", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Listado de propiedades segun recursos </h3>
                    <!-- Para -->
                    <p>Defina las propiedades segun el recurso ingresado recientemente</p>
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
			<th><?php echo $this->Paginator->sort('propiedade_id', 'Propiedad'); ?></th>
			<th><?php echo $this->Paginator->sort('valor', 'Valor'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($propiedadesRecursos as $propiedadesRecurso): ?>
		<td>
			<?php echo $this->Html->link($propiedadesRecurso['Propiedade']['nombre'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecurso['Propiedade']['id'])); ?>
		</td>
		<td><?php echo h($propiedadesRecurso['PropiedadesRecurso']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $propiedadesRecurso['PropiedadesRecurso']['id'],$propiedadesRecurso['PropiedadesRecurso']['propiedade_id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Propiedades Recursos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
