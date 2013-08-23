 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Bitacora'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("bitacoras", array('controller' => 'Bitacora', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Bitacora", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Bitacora').' '; ?> <?php echo $bitacora['Bitacora']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($bitacora['Bitacora']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($bitacora['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $bitacora['Evento']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Vehiculo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($bitacora['Vehiculo']['id'], array('controller' => 'vehiculos', 'action' => 'view', $bitacora['Vehiculo']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Hora Inicio </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($bitacora['Bitacora']['hora_inicio'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Hora Termino </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($bitacora['Bitacora']['hora_termino'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($bitacora['Bitacora']['descripcion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $bitacora['Bitacora']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $bitacora['Bitacora']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Bitacora?', $bitacora['Bitacora']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bitacora'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bitacora'), array('action' => 'delete', $bitacora['Bitacora']['id']), null, __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
