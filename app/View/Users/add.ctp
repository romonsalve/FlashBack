
<?php echo $this->Form->create('User'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add User</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">users</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add User</h6>
                <hr />

	<!--<?php echo __('Add User'); ?></legend>-->
	<?php
		echo $this->Form->input('name', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese name'));
				//echo $this->Form->input('name', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese name'));
		echo '<hr /> ';
				echo $this->Form->input('username', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese username'));
				//echo $this->Form->input('username', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese username'));
		echo '<hr /> ';
				echo $this->Form->input('password', array('class' =>'span9','placeholder' => 'Ingrese password'));
		echo '<hr /> ';
				//echo $this->Form->input('password', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese password'));
				echo $this->Form->input('password_confirmation', array('class' =>'span9','placeholder' => 'Confirme password','type' => 'password'));
			
		echo '<hr /> ';
				echo $this->Form->input('role', array('class' =>'span9','label' => 'Rol', 'options' => array('gerente' => 'Gerente', 'organizador' => 'Organizador','empleado' => 'Empleado', 'cliente' => 'Cliente')
        ));
				//echo $this->Form->input('role', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese role'));
		echo '<hr /> ';
				echo $this->Form->input('email', array('class' =>'span9','placeholder' => 'Ingrese email'));
				//echo $this->Form->input('email', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese email'));
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

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
--!>


