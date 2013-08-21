<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
		  <ul class="breadcrumb">
                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                    <li class="active">Participantes</li>
                  </ul>
		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Participantes</h3>
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
			<th><?php echo $this->Paginator->sort('participante_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_artistico_par'); ?></th>
			<th><?php echo $this->Paginator->sort('desc_par'); ?></th>
			<th><?php echo $this->Paginator->sort('ranking_par'); ?></th>
			<th><?php echo $this->Paginator->sort('contrato_par'); ?></th>
			<th><?php echo $this->Paginator->sort('rut_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidop_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidom_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('fono_cont_par'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_cont_par'); ?></th>
	
	<th class="actions"><?php echo __('Actions'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($participantes as $participante): ?>
		<td><?php echo h($participante['Participante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participante['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participante['ParticipanteTipo']['id'])); ?>
		</td>
		<td><?php echo h($participante['Participante']['nombre_artistico_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['desc_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['ranking_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['contrato_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['rut_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['nombre_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['apellidop_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['apellidom_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['direccion_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['fono_cont_par']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['correo_cont_par']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $participante['Participante']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $participante['Participante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $participante['Participante']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $participante['Participante']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Participantes</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
