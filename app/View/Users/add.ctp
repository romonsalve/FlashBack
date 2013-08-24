<?php $user = $this->Session->read('Auth.User'); ?>
<?php echo $this->Form->create('User'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <?php 
          $add= 'Registro';
          if(count($user)) {
              echo "<h2>Agregar usuario</h2>";
               $add = "add";
          }else{
          echo "<h2>Registro</h2>";
          }?>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->


	<?php echo $this->TwitterBootstrap->add_crumb("users", 'index');echo $this->TwitterBootstrap->add_crumb($add, null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('name', array('type'=>'text','class' =>'span12','label' => 'Ingrese nombre', 'placeholder' => 'Nombre',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('username', array('type'=>'text','class' =>'span12','label' => 'Ingrese nombre de usuario', 'placeholder' => 'Nombre de usuario',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('password', array('type'=>'password','class' =>'span12','label' => 'Ingrese contraseña', 'placeholder' => 'Contraseña',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
        echo '<hr /> ';
        //echo $this->Form->input('password', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese password'));
        echo $this->Form->input('password_confirmation', array('label' => 'Confirme contraseña','class' =>'span12','placeholder' => 'Confirme contraseña','type' => 'password'));
		echo '<hr /> ';
        if($user['role']=='gerente'){
				echo $this->Form->input('role', array('class' =>'span12','label' => 'Rol', 'options' => array('gerente' => 'Gerente', 'organizador' => 'Organizador','empleado' => 'Empleado', 'cliente' => 'Cliente'),'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
        }else{
          echo $this->Form->input('role', array('class' =>'span12','label' => 'Rol', 'options' => array("cliente" => "Cliente"),'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
        }
		echo '<hr /> ';
				echo $this->Form->input('email', array('type'=>'text','class' =>'span12','label' => 'Ingrese email', 'placeholder' => 'email',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






