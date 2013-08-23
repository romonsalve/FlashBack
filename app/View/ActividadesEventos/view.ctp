 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Actividades Evento'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("actividadesEventos", array('controller' => 'ActividadesEvento', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Actividades Evento", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Actividades Evento').' '; ?> <?php echo $actividadesEvento['ActividadesEvento']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Eventos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesEvento['Eventos']['id'], array('controller' => 'eventos', 'action' => 'view', $actividadesEvento['Eventos']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Actividades</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesEvento['Actividades']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesEvento['Actividades']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha Inicio </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['fecha_inicio'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha Termino </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['fecha_termino'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Estado </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['estado'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $actividadesEvento['ActividadesEvento']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $actividadesEvento['ActividadesEvento']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Actividades Evento?', $actividadesEvento['ActividadesEvento']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Evento'), array('action' => 'edit', $actividadesEvento['ActividadesEvento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Evento'), array('action' => 'delete', $actividadesEvento['ActividadesEvento']['id']), null, __('Are you sure you want to delete # %s?', $actividadesEvento['ActividadesEvento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventos'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
