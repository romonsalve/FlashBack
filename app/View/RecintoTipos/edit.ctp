
<?php echo $this->Form->create('RecintoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Recinto Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">recintoTipos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <h6>Edit Recinto Tipo</h6>
                <hr />

	<!--<?php echo __('Edit Recinto Tipo'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_recit', array('class' =>'span9','placeholder' => 'Ingrese nombre_recit'));
				//echo $this->Form->input('nombre_recit', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_recit'));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo EventoTipo ?></h6> <hr />'; 		echo $this->Form->input('EventoTipo', array('type' => 'select', 'multiple'=>'checkbox') );
$this->Form->button("Submit Form", array("type" => "submit","class" => "btn btn-primary"));	?> 
		<button class='btn btn-primary'>Guardar</button>
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






<!--


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RecintoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RecintoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recinto Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recintos'), array('controller' => 'recintos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recinto'), array('controller' => 'recintos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


