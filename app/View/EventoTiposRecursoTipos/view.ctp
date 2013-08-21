 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Evento Tipos Recurso Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Evento Tipos Recurso Tipo'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Evento Tipos Recurso Tipo').' '; ?> <?php echo $eventoTiposRecursoTipo['EventoTiposRecursoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventoTiposRecursoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposRecursoTipo['EventoTipo']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Recurso Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventoTiposRecursoTipo['RecursoTipo']['id'], array('controller' => 'recurso_tipos', 'action' => 'view', $eventoTiposRecursoTipo['RecursoTipo']['id']))." &nbsp</div>"; ?> </li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $eventoTiposRecursoTipo['EventoTiposRecursoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $eventoTiposRecursoTipo['EventoTiposRecursoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Evento Tipos Recurso Tipo?', $eventoTiposRecursoTipo['EventoTiposRecursoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento Tipos Recurso Tipo'), array('action' => 'edit', $eventoTiposRecursoTipo['EventoTiposRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento Tipos Recurso Tipo'), array('action' => 'delete', $eventoTiposRecursoTipo['EventoTiposRecursoTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTiposRecursoTipo['EventoTiposRecursoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Recurso Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipos Recurso Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
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
                
