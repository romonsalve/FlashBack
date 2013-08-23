 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Cliente Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("clienteTipos", array('controller' => 'ClienteTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Cliente Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Cliente Tipo').' '; ?> <?php echo $clienteTipo['ClienteTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($clienteTipo['ClienteTipo']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($clienteTipo['ClienteTipo']['nombre'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $clienteTipo['ClienteTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $clienteTipo['ClienteTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Cliente Tipo?', $clienteTipo['ClienteTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente Tipo'), array('action' => 'edit', $clienteTipo['ClienteTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente Tipo'), array('action' => 'delete', $clienteTipo['ClienteTipo']['id']), null, __('Are you sure you want to delete # %s?', $clienteTipo['ClienteTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cliente Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Tipo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
