<?php $user = $this->Session->read('Auth.User'); ?>
<?php echo $this->Form->create('Cliente'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Registro de Cliente</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("Clientes", 'index');echo $this->TwitterBootstrap->add_crumb("Registro", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
  /***********************USUARIO************************/
    echo $this->Form->input('User.username', array('type'=>'text','class' =>'span12','label' => 'Ingrese nombre de usuario', 'placeholder' => 'Nombre de usuario',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    echo '<hr /> ';
        echo $this->Form->input('User.password', array('type'=>'password','class' =>'span12','label' => 'Ingrese contraseña', 'placeholder' => 'Contraseña',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
        echo '<hr /> ';
        //echo $this->Form->input('password', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese password'));
        echo $this->Form->input('User.password_confirmation', array('label' => 'Confirme contraseña','class' =>'span12','placeholder' => 'Confirme contraseña','type' => 'password'));
        if($user['role']=='gerente'){
          echo '<hr /> ';
        echo $this->Form->input('User.role', array('class' =>'span12','label' => 'Rol', 'options' => array('gerente' => 'Gerente', 'organizador' => 'Organizador','empleado' => 'Empleado', 'cliente' => 'Cliente'),'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
         echo '<hr /> ';
        }else{

          echo $this->Form->input('User.role', array('class' =>'span12', 'options' => array("cliente" => "Cliente"),'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
         echo '<hr /> ';
        }
        /*******************************************/
		echo $this->Form->input('Cliente.cliente_tipo_id', array('default' => 2,'class' =>'span12','label' => '¿Es usted un particular o una empresa?', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('Cliente.rut', array('type'=>'text', 'class' =>'span12','label' => 'Ingrese su RUT', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('Cliente.nombre', array('type'=>'text', 'class' =>'span12','label' => 'Nombre: (o Razón Social en caso de ser una empresa)', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('Cliente.apellido_paterno', array('type'=>'text', 'class' =>'span12','label' => 'Apellido Paterno:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('Cliente.apellido_materno', array('type'=>'text', 'class' =>'span12','label' => 'Apellido Materno:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('Cliente.direccion', array('type'=>'text', 'class' =>'span12','label' => 'Dirección:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('Cliente.fono', array('type'=>'text', 'class' =>'span12','label' => 'Teléfono:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('Cliente.correo', array('type'=>'text', 'class' =>'span12','label' => 'Correo electrónico:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Registrarse", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






