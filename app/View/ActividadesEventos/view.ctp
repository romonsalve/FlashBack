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

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Actividades Evento'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Actividades Evento').' '; ?> <?php echo $actividadesEvento['ActividadesEvento']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesEvento['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $actividadesEvento['Evento']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Actividade</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesEvento['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesEvento['Actividade']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha Ini Act </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['fecha_ini_act'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fecha Ter Act </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['fecha_ter_act'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Estado Act </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($actividadesEvento['ActividadesEvento']['estado_act'])." &nbsp</div>";  ?></li></ul>
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
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
