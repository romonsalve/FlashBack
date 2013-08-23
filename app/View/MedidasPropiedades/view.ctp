 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Medidas Propiedade'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("medidasPropiedades", array('controller' => 'MedidasPropiedade', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Medidas Propiedade", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Medidas Propiedade').' '; ?> <?php echo $medidasPropiedade['MedidasPropiedade']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<li><?php echo "<div class='col-l' style = 'text-align: right;'> Medidas</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($medidasPropiedade['Medidas']['id'], array('controller' => 'medidas', 'action' => 'view', $medidasPropiedade['Medidas']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Propiedades</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($medidasPropiedade['Propiedades']['id'], array('controller' => 'propiedades', 'action' => 'view', $medidasPropiedade['Propiedades']['id']))." &nbsp</div>"; ?> </li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $medidasPropiedade['MedidasPropiedade']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $medidasPropiedade['MedidasPropiedade']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Medidas Propiedade?', $medidasPropiedade['MedidasPropiedade']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medidas Propiedade'), array('action' => 'edit', $medidasPropiedade['MedidasPropiedade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Medidas Propiedade'), array('action' => 'delete', $medidasPropiedade['MedidasPropiedade']['id']), null, __('Are you sure you want to delete # %s?', $medidasPropiedade['MedidasPropiedade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas Propiedades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medidas Propiedade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medidas'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedades'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
