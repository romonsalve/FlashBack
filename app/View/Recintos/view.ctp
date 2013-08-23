 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Recinto'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("recintos", array('controller' => 'Recinto', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Recinto", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Recinto').' '; ?> <?php echo $recinto['Recinto']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recinto['Recinto']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recinto Tipos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($recinto['RecintoTipos']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $recinto['RecintoTipos']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recinto['Recinto']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Mapa </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recinto['Recinto']['mapa'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Dimension </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recinto['Recinto']['dimension'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Ubicacion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($recinto['Recinto']['ubicacion'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $recinto['Recinto']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $recinto['Recinto']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Recinto?', $recinto['Recinto']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recinto'), array('action' => 'edit', $recinto['Recinto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recinto'), array('action' => 'delete', $recinto['Recinto']['id']), null, __('Are you sure you want to delete # %s?', $recinto['Recinto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
