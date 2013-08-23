 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Eventos Recurso'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("eventosRecursos", array('controller' => 'EventosRecurso', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Eventos Recurso", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->
        <hr />
        <div class="box-body">
          
                     <!-- Pricing table -->                     
                     <!-- Price details. Note down the class name before you edit. -->
                     <div class="row-fluid">
                     
                        <div class="span8 offset2">
                        
                           
                           <!-- Pricing table #1. -->
                           <div class="pricel center">
                                 <div class="phead-top b-orange">
                                    <!-- Title -->
                                    <h4>Información del <?php echo __('Eventos Recurso').' '; ?> <?php echo $eventosRecurso['EventosRecurso']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($eventosRecurso['EventosRecurso']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventosRecurso['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $eventosRecurso['Evento']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recurso</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventosRecurso['Recurso']['id'], array('controller' => 'recursos', 'action' => 'view', $eventosRecurso['Recurso']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Cantidad </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($eventosRecurso['EventosRecurso']['cantidad'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $eventosRecurso['EventosRecurso']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $eventosRecurso['EventosRecurso']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Eventos Recurso?', $eventosRecurso['EventosRecurso']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eventos Recurso'), array('action' => 'edit', $eventosRecurso['EventosRecurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eventos Recurso'), array('action' => 'delete', $eventosRecurso['EventosRecurso']['id']), null, __('Are you sure you want to delete # %s?', $eventosRecurso['EventosRecurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos Recursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventos Recurso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
