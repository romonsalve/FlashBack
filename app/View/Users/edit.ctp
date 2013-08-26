<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Editar usuario</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

  <?php echo $this->TwitterBootstrap->add_crumb("users", 'index');echo $this->TwitterBootstrap->add_crumb("Edit", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
  <?php

echo $this->Form->create('User'); 
$usuario = $this->Session->read('Auth.User');
if($user['User']['id']!= $usuario['id']){
  if($usuario['role']!='gerente'){

    echo '<script type="text/javascript">

window.location="../";

</script>';
  }
}
  
       echo $this->Form->input('id', array('class' =>'span12','label' => 'Ingrese id', 'placeholder' => '',
      'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));

        echo $this->Form->input('User.username', array('readonly'=>'true','type'=>'text','class' =>'span12','label' => 'Ingrese nombre de usuario', 'placeholder' => 'Nombre de usuario',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    echo '<hr /> ';
        echo $this->Form->input('User.password', array('type'=>'password','class' =>'span12','label' => 'Ingrese contraseña', 'placeholder' => 'Contraseña',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
        echo '<hr /> ';
        //echo $this->Form->input('password', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese password'));
        echo $this->Form->input('User.password_confirmation', array('label' => 'Confirme contraseña','class' =>'span12','placeholder' => 'Confirme contraseña','type' => 'password'));
    echo '<hr /> ';
        if($usuario['role']=='gerente'){
        echo $this->Form->input('User.role', array('class' =>'span12','label' => 'Rol', 'options' => array('gerente' => 'Gerente', 'organizador' => 'Organizador','empleado' => 'Empleado', 'cliente' => 'Cliente'),'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
        }else{
          echo $this->Form->input('User.role', array('readonly'=>'true','class' =>'span12','label' => 'Rol', 'options' => array($usuario['role'] => $usuario['role']),'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
        }
    echo '<hr /> ';
        echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));  ?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






