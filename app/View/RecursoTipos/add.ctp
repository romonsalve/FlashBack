
<?php echo $this->Form->create('RecursoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Recurso Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">recursoTipos</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <h6>Add Recurso Tipo</h6>
                <hr />

	<!--<?php echo __('Add Recurso Tipo'); ?></legend>-->
	<?php
		echo $this->Form->input('nombre_rect', array('class' =>'span9','placeholder' => 'Ingrese nombre_rect'));
				//echo $this->Form->input('nombre_rect', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_rect'));
		echo '<hr /> ';
				echo $this->Form->input('clasif_rect', array('class' =>'span9','placeholder' => 'Ingrese clasif_rect'));
				//echo $this->Form->input('clasif_rect', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese clasif_rect'));
		echo '<hr /> ';
				echo $this->Form->input('desc_rect', array('class' =>'span9','placeholder' => 'Ingrese desc_rect'));
				//echo $this->Form->input('desc_rect', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_rect'));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo EventoTipo ?></h6> <hr />'; 		echo $this->Form->input('EventoTipo', array('type' => 'select', 'multiple'=>'checkbox') );
echo '<h6> <?php echo Propiedade ?></h6> <hr />'; 		echo $this->Form->input('Propiedade', array('type' => 'select', 'multiple'=>'checkbox') );
echo '<h6> <?php echo Proveedore ?></h6> <hr />'; 		echo $this->Form->input('Proveedore', array('type' => 'select', 'multiple'=>'checkbox') );
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

		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


