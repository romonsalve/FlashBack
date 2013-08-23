 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Proveedores Recurso Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("proveedoresRecursoTipos", array('controller' => 'ProveedoresRecursoTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Proveedores Recurso Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Proveedores Recurso Tipo').' '; ?> <?php echo $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<li><?php echo "<div class='col-l' style = 'text-align: right;'> Proveedore</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($proveedoresRecursoTipo['Proveedore']['id'], array('controller' => 'proveedores', 'action' => 'view', $proveedoresRecursoTipo['Proveedore']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recurso Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($proveedoresRecursoTipo['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $proveedoresRecursoTipo['RecursoTipo']['id']))." &nbsp</div>"; ?> </li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Proveedores Recurso Tipo?', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedores Recurso Tipo'), array('action' => 'edit', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedores Recurso Tipo'), array('action' => 'delete', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $proveedoresRecursoTipo['ProveedoresRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores Recurso Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedores Recurso Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
