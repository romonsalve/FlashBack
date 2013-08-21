
<?php echo $this->Form->create('Recurso'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Recurso</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">recursos</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <h6>Add Recurso</h6>
                <hr />

	<!--<?php echo __('Add Recurso'); ?></legend>-->
	<?php
		echo $this->Form->input('recurso_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese recurso_tipo_id'));
				//echo $this->Form->input('recurso_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recurso_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('proveedore_id', array('class' =>'span9','placeholder' => 'Ingrese proveedore_id'));
				//echo $this->Form->input('proveedore_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese proveedore_id'));
		echo '<hr /> ';
				echo $this->Form->input('cantidad_rec', array('class' =>'span9','placeholder' => 'Ingrese cantidad_rec'));
				//echo $this->Form->input('cantidad_rec', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese cantidad_rec'));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo Evento ?></h6> <hr />'; 		echo $this->Form->input('Evento', array('type' => 'select', 'multiple'=>'checkbox') );
echo '<h6> <?php echo Propiedade ?></h6> <hr />'; 		echo $this->Form->input('Propiedade', array('type' => 'select', 'multiple'=>'checkbox') );
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

		<li><?php echo $this->Html->link(__('List Recursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


