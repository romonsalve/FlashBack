 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Propiedades Recurso'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("propiedadesRecursos", array('controller' => 'PropiedadesRecurso', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Propiedades Recurso", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Propiedades Recurso').' '; ?> <?php echo $propiedadesRecurso['PropiedadesRecurso']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($propiedadesRecurso['PropiedadesRecurso']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recursos</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($propiedadesRecurso['Recursos']['id'], array('controller' => 'recursos', 'action' => 'view', $propiedadesRecurso['Recursos']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Propiedades</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($propiedadesRecurso['Propiedades']['id'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesRecurso['Propiedades']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Valor </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($propiedadesRecurso['PropiedadesRecurso']['valor'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedadesRecurso['PropiedadesRecurso']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propiedadesRecurso['PropiedadesRecurso']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Propiedades Recurso?', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propiedades Recurso'), array('action' => 'edit', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propiedades Recurso'), array('action' => 'delete', $propiedadesRecurso['PropiedadesRecurso']['id']), null, __('Are you sure you want to delete # %s?', $propiedadesRecurso['PropiedadesRecurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades Recursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedades Recurso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursos'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
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
                
