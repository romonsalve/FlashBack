
<?php echo $this->Form->create('MedidasPropiedade'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Medidas Propiedade</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">medidasPropiedades</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Medidas Propiedade</h6>
                <hr />

	<!--<?php echo __('Edit Medidas Propiedade'); ?></legend>-->
	<?php
		echo $this->Form->input('medida_id', array('class' =>'span9','placeholder' => 'Ingrese medida_id'));
				//echo $this->Form->input('medida_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese medida_id'));
		echo '<hr /> ';
				echo $this->Form->input('propiedade_id', array('class' =>'span9','placeholder' => 'Ingrese propiedade_id'));
				//echo $this->Form->input('propiedade_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese propiedade_id'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MedidasPropiedade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MedidasPropiedade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Medidas Propiedades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


