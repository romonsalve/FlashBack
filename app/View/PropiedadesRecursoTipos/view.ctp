 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Propiedades Recurso Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("propiedadesRecursoTipos", array('controller' => 'PropiedadesRecursoTipo', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Propiedades Recurso Tipo", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Propiedades Recurso Tipo').' '; ?> <?php echo $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Medida</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($propiedadesRecursoTipo['Medida']['id'], array('controller' => 'medidas', 'action' => 'view', $propiedadesRecursoTipo['Medida']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Propiedade</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($propiedadesRecursoTipo['Propiedade']['id'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecursoTipo['Propiedade']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recurso Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($propiedadesRecursoTipo['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $propiedadesRecursoTipo['RecursoTipo']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Maximo  Medida </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['maximo__medida'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Minimo Medida </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($propiedadesRecursoTipo['PropiedadesRecursoTipo']['minimo_medida'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Propiedades Recurso Tipo?', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propiedades Recurso Tipo'), array('action' => 'edit', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propiedades Recurso Tipo'), array('action' => 'delete', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $propiedadesRecursoTipo['PropiedadesRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades Recurso Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedades Recurso Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
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
                
