 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Actividades Evento Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("actividadesEventoTipos", array('controller' => 'ActividadesEventoTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Actividades Evento Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Actividades Evento Tipo').' '; ?> <?php echo $actividadesEventoTipo['ActividadesEventoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesEventoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $actividadesEventoTipo['EventoTipo']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Actividade</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($actividadesEventoTipo['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesEventoTipo['Actividade']['id']))." &nbsp</div>"; ?> </li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $actividadesEventoTipo['ActividadesEventoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $actividadesEventoTipo['ActividadesEventoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Actividades Evento Tipo?', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Evento Tipo'), array('action' => 'edit', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Evento Tipo'), array('action' => 'delete', $actividadesEventoTipo['ActividadesEventoTipo']['id']), null, __('Are you sure you want to delete # %s?', $actividadesEventoTipo['ActividadesEventoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Evento Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Evento Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
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
                
