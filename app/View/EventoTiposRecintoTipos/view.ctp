 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Evento Tipos Recinto Tipo'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo __('Evento Tipos Recinto Tipo'); ?></a> <span class="divider">/</span></li>
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
                                    <h4>Información del <?php echo __('Evento Tipos Recinto Tipo').' '; ?> <?php echo $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<li><?php echo "<div class='col-l' style = 'text-align: right;'> Recinto Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventoTiposRecintoTipo['RecintoTipo']['id'], array('controller' => 'recinto_tipos', 'action' => 'view', $eventoTiposRecintoTipo['RecintoTipo']['id']))." &nbsp</div>"; ?> </li><li><?php echo "<div class='col-l' style = 'text-align: right;'> Evento Tipo</div>:<div class='col-r' style = 'text-align: left;'> ".$this->Html->link($eventoTiposRecintoTipo['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $eventoTiposRecintoTipo['EventoTipo']['id']))." &nbsp</div>"; ?> </li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Evento Tipos Recinto Tipo?', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento Tipos Recinto Tipo'), array('action' => 'edit', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento Tipos Recinto Tipo'), array('action' => 'delete', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id']), null, __('Are you sure you want to delete # %s?', $eventoTiposRecintoTipo['EventoTiposRecintoTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos Recinto Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipos Recinto Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('controller' => 'recinto_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto Tipo'), array('controller' => 'recinto_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
