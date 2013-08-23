 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Participante'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("participantes", array('controller' => 'Participante', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Participante", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
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
                                    <h4>Información del <?php echo __('Participante').' '; ?> <?php echo $participante['Participante']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Participante Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($participante['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participante['ParticipanteTipo']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Artistico </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['nombre_artistico'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Contrato </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['contrato'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Ranking </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['ranking'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Descripcion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['descripcion'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Rut </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['rut'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['nombre'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Paterno </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['apellido_paterno'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellido Materno </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['apellido_materno'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Direccion </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['direccion'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['fono'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['correo'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $participante['Participante']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $participante['Participante']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Participante?', $participante['Participante']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante'), array('action' => 'edit', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante'), array('action' => 'delete', $participante['Participante']['id']), null, __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
