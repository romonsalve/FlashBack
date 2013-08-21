
<?php echo $this->Form->create('Auditorium'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Auditorium</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">auditoria</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Auditorium</h6>
                <hr />

	<!--<?php echo __('Add Auditorium'); ?></legend>-->
	<?php
		echo $this->Form->input('nombre_tabla_audit', array('class' =>'span9','placeholder' => 'Ingrese nombre_tabla_audit'));
				//echo $this->Form->input('nombre_tabla_audit', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_tabla_audit'));
		echo '<hr /> ';
				echo $this->Form->input('operacion_audit', array('class' =>'span9','placeholder' => 'Ingrese operacion_audit'));
				//echo $this->Form->input('operacion_audit', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese operacion_audit'));
		echo '<hr /> ';
				echo $this->Form->input('valor_antiguo', array('class' =>'span9','placeholder' => 'Ingrese valor_antiguo'));
				//echo $this->Form->input('valor_antiguo', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese valor_antiguo'));
		echo '<hr /> ';
				echo $this->Form->input('valor_nuevo', array('class' =>'span9','placeholder' => 'Ingrese valor_nuevo'));
				//echo $this->Form->input('valor_nuevo', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese valor_nuevo'));
		echo '<hr /> ';
				echo $this->Form->input('hora', array('class' =>'span9','placeholder' => 'Ingrese hora'));
				//echo $this->Form->input('hora', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese hora'));
		echo '<hr /> ';
				echo $this->Form->input('usuario', array('class' =>'span9','placeholder' => 'Ingrese usuario'));
				//echo $this->Form->input('usuario', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese usuario'));
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

		<li><?php echo $this->Html->link(__('List Auditoria'), array('action' => 'index')); ?></li>
	</ul>
</div>
--!>


