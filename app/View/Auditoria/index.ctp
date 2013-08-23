<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Auditoria", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Auditoria</h3>
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
			<th><?php echo $this->Paginator->sort('nombre_tabla_audit', 'nombre_tabla_audit'); ?></th>
			<th><?php echo $this->Paginator->sort('operacion_audit', 'operacion_audit'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_antiguo', 'valor_antiguo'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_nuevo', 'valor_nuevo'); ?></th>
			<th><?php echo $this->Paginator->sort('hora', 'hora'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario', 'usuario'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($auditoria as $auditorium): ?>
		<td><?php echo h($auditorium['Auditorium']['id']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['nombre_tabla_audit']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['operacion_audit']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['valor_antiguo']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['valor_nuevo']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['hora']); ?>&nbsp;</td>
		<td><?php echo h($auditorium['Auditorium']['usuario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $auditorium['Auditorium']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $auditorium['Auditorium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $auditorium['Auditorium']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $auditorium['Auditorium']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Auditoria</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
