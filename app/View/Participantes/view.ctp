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

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Participante'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Participante').' '; ?> <?php echo $participante['Participante']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['id'])." &nbsp</div>";  ?></li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Participante Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($participante['ParticipanteTipo']['id'], array('controller' => 'participante_tipos', 'action' => 'view', $participante['ParticipanteTipo']['id']))." &nbsp</div>"; ?> </li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Artistico Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['nombre_artistico_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Desc Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['desc_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Ranking Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['ranking_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Contrato Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['contrato_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Rut Cont Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['rut_cont_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Cont Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['nombre_cont_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellidop Cont Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['apellidop_cont_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Apellidom Cont Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['apellidom_cont_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Direccion Cont Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['direccion_cont_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Fono Cont Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['fono_cont_par'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo Cont Par </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($participante['Participante']['correo_cont_par'])." &nbsp</div>";  ?></li></ul>
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
                
