 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Auditorium'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Auditorium'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Auditorium').' '; ?> <?php echo $auditorium['Auditorium']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($auditorium['Auditorium']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre Tabla Audit </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($auditorium['Auditorium']['nombre_tabla_audit'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Operacion Audit </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($auditorium['Auditorium']['operacion_audit'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Valor Antiguo </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($auditorium['Auditorium']['valor_antiguo'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Valor Nuevo </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($auditorium['Auditorium']['valor_nuevo'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Hora </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($auditorium['Auditorium']['hora'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Usuario </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($auditorium['Auditorium']['usuario'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $auditorium['Auditorium']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $auditorium['Auditorium']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Auditorium?', $auditorium['Auditorium']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditorium'), array('action' => 'edit', $auditorium['Auditorium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditorium'), array('action' => 'delete', $auditorium['Auditorium']['id']), null, __('Are you sure you want to delete # %s?', $auditorium['Auditorium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditoria'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditorium'), array('action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
