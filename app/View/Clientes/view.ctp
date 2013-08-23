 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Cliente'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("clientes", array('controller' => 'Cliente', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Cliente", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Cliente').' '; ?> <?php echo $cliente['Cliente']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Cliente Tipos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($cliente['ClienteTipos']['id'], array('controller' => 'cliente_tipos', 'action' => 'view', $cliente['ClienteTipos']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Rut </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['rut'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Paterno </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['apellido_paterno'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Materno </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['apellido_materno'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Direccion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['direccion'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['fono'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($cliente['Cliente']['correo'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $cliente['Cliente']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Cliente?', $cliente['Cliente']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('controller' => 'cliente_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Tipos'), array('controller' => 'cliente_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
