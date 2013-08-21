
<?php echo $this->Form->create('PropiedadesRecursoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Propiedades Recurso Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">propiedadesRecursoTipos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Propiedades Recurso Tipo</h6>
                <hr />

	<!--<?php echo __('Edit Propiedades Recurso Tipo'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('recurso_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese recurso_tipo_id'));
				//echo $this->Form->input('recurso_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recurso_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('propiedade_id', array('class' =>'span9','placeholder' => 'Ingrese propiedade_id'));
				//echo $this->Form->input('propiedade_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese propiedade_id'));
		echo '<hr /> ';
				echo $this->Form->input('max_rango_prop_tip', array('class' =>'span9','placeholder' => 'Ingrese max_rango_prop_tip'));
				//echo $this->Form->input('max_rango_prop_tip', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese max_rango_prop_tip'));
		echo '<hr /> ';
				echo $this->Form->input('min_rango_prop_tip', array('class' =>'span9','placeholder' => 'Ingrese min_rango_prop_tip'));
				//echo $this->Form->input('min_rango_prop_tip', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese min_rango_prop_tip'));
		echo '<hr /> ';
				echo $this->Form->input('medida_prop_tip', array('class' =>'span9','placeholder' => 'Ingrese medida_prop_tip'));
				//echo $this->Form->input('medida_prop_tip', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese medida_prop_tip'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PropiedadesRecursoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PropiedadesRecursoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Propiedades Recurso Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


