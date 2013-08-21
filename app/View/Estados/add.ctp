
<?php echo $this->Form->create('Estado'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Estado</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">estados</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Estado</h6>
                <hr />

	<!--<?php echo __('Add Estado'); ?></legend>-->
	<?php
		echo $this->Form->input('nombre_est', array('class' =>'span9','placeholder' => 'Ingrese nombre_est'));
				//echo $this->Form->input('nombre_est', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_est'));
		echo '<hr /> ';
				echo $this->Form->input('desc_est', array('class' =>'span9','placeholder' => 'Ingrese desc_est'));
				//echo $this->Form->input('desc_est', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_est'));
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

		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Cotizaciones'), array('controller' => 'solicitud_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Cotizacione'), array('controller' => 'solicitud_cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


