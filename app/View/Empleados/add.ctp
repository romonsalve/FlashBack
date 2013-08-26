<?php $user = $this->Session->read('Auth.User'); ?>
<?php echo $this->Form->create('Empleado'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Add Empleado</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("empleados", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
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

          echo $this->Form->input('User.role', array('class' =>'span12', 'options' => array("empleado" => "Empleado"),'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
         echo '<hr /> ';
        }
        /*******************************************/
		echo $this->Form->input('Empleado.empleado_tipo_id', array('class' =>'span12','label' => 'Ingrese empleado_tipo_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.rut', array('type'=>'text','class' =>'span12','label' => 'Ingrese rut', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.nombre', array('type'=>'text','class' =>'span12','label' => 'Ingrese nombre', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.apellido_paterno', array('type'=>'text','class' =>'span12','label' => 'Ingrese apellido_paterno', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.apellido_materno', array('type'=>'text','class' =>'span12','label' => 'Ingrese apellido_materno', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.direccion', array('type'=>'text','class' =>'span12','label' => 'Ingrese direccion', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.fono', array('type'=>'text','class' =>'span12','label' => 'Ingrese fono', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.correo', array('type'=>'text','class' =>'span12','label' => 'Ingrese correo', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('Empleado.contrato', array('type'=>'text','class' =>'span12','label' => 'Ingrese contrato', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo Evento ?></h6> <hr />'; 		echo $this->Form->input('Evento', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






