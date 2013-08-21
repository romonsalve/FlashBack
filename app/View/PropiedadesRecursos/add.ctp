
<?php echo $this->Form->create('PropiedadesRecurso'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Propiedades Recurso</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">propiedadesRecursos</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Propiedades Recurso</h6>
                <hr />

	<!--<?php echo __('Add Propiedades Recurso'); ?></legend>-->
	<?php
		echo $this->Form->input('recurso_id', array('class' =>'span9','placeholder' => 'Ingrese recurso_id'));
				//echo $this->Form->input('recurso_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recurso_id'));
		echo '<hr /> ';
				echo $this->Form->input('propiedade_id', array('class' =>'span9','placeholder' => 'Ingrese propiedade_id'));
				//echo $this->Form->input('propiedade_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese propiedade_id'));
		echo '<hr /> ';
				echo $this->Form->input('valor_pro_rec', array('class' =>'span9','placeholder' => 'Ingrese valor_pro_rec'));
				//echo $this->Form->input('valor_pro_rec', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese valor_pro_rec'));
		echo '<hr /> ';
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

		<li><?php echo $this->Html->link(__('List Propiedades Recursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


