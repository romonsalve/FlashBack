<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
		  <ul class="breadcrumb">
                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                    <li class="active">Itinerario Participantes</li>
                  </ul>
		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Itinerario Participantes</h3>
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
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('participante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ini_par'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_ter_par'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_iti_par'); ?></th>
	
	<th class="actions"><?php echo __('Actions'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($itinerarioParticipantes as $itinerarioParticipante): ?>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itinerarioParticipante['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $itinerarioParticipante['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itinerarioParticipante['Participante']['id'], array('controller' => 'participantes', 'action' => 'view', $itinerarioParticipante['Participante']['id'])); ?>
		</td>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['hora_ini_par']); ?>&nbsp;</td>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['hora_ter_par']); ?>&nbsp;</td>
		<td><?php echo h($itinerarioParticipante['ItinerarioParticipante']['desc_iti_par']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $itinerarioParticipante['ItinerarioParticipante']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $itinerarioParticipante['ItinerarioParticipante']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Itinerario Participantes</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
