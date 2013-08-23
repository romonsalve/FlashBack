<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Evento Tipos Recinto Tipos", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Evento Tipos Recinto Tipos</h3>
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

			<th><?php echo $this->Paginator->sort('recinto_tipo_id', 'recinto_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_tipo_id', 'evento_tipo_id'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($eventoTiposRecintoTipos as $eventoTiposRecintoTipo): ?>
		<td>
			<?php echo $this->Html->link($eventoTiposRecintoTipo['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $eventoTiposRecintoTipo['RecintoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eventoTiposRecintoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposRecintoTipo['EventoTipo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Evento Tipos Recinto Tipos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
