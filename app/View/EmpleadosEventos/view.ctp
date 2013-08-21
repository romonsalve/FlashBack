 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Empleados Evento'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Empleados Evento'); ?></a> <span class="divider">/</span></li>
          <li class="active">Ver</li>
        </ul>        

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
                                    <h4>Información del <?php echo __('Empleados Evento').' '; ?> <?php echo $empleadosEvento['EmpleadosEvento']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleadosEvento['EmpleadosEvento']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Empleado</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($empleadosEvento['Empleado']['id'], array('controller' => 'empleados', 'action' => 'view', $empleadosEvento['Empleado']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($empleadosEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $empleadosEvento['Evento']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Hora Ini Ete </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleadosEvento['EmpleadosEvento']['hora_ini_ete'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Hora Ter Ete </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleadosEvento['EmpleadosEvento']['hora_ter_ete'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Cargo Ete </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($empleadosEvento['EmpleadosEvento']['cargo_ete'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $empleadosEvento['EmpleadosEvento']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $empleadosEvento['EmpleadosEvento']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Empleados Evento?', $empleadosEvento['EmpleadosEvento']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleados Evento'), array('action' => 'edit', $empleadosEvento['EmpleadosEvento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleados Evento'), array('action' => 'delete', $empleadosEvento['EmpleadosEvento']['id']), null, __('Are you sure you want to delete # %s?', $empleadosEvento['EmpleadosEvento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleados Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
