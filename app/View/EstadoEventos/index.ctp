<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
		  <ul class="breadcrumb">
                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                    <li class="active">Estado Eventos</li>
                  </ul>
		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Estado Eventos</h3>
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

			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_estado_evt'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_estado_evt'); ?></th>
	
	<th class="actions"><?php echo __('Actions'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($estadoEventos as $estadoEvento): ?>
		<td><?php echo h($estadoEvento['EstadoEvento']['id']); ?>&nbsp;</td>
		<td><?php echo h($estadoEvento['EstadoEvento']['nombre_estado_evt']); ?>&nbsp;</td>
		<td><?php echo h($estadoEvento['EstadoEvento']['desc_estado_evt']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $estadoEvento['EstadoEvento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estadoEvento['EstadoEvento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $estadoEvento['EstadoEvento']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $estadoEvento['EstadoEvento']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Estado Eventos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
