
<?php echo $this->Form->create('User'); 
$currentUser = $this->Session->read('Auth.User');
if($user['User']['id']!= $currentUser['id']){
  if($currentUser['role']!='gerente'){
    echo '<script type="text/javascript">

window.location="../";

</script>';
  }
}?>
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
 $usuario = $this->Session->read('Auth.User');
    echo $this->Form->input('id', array('class' =>'span12','placeholder' => 'Ingrese id'));
        //echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
    echo '<hr /> ';
        echo $this->Form->input('name', array('type'=>'text','class' =>'span12','placeholder' => 'Ingrese name'));
        //echo $this->Form->input('name', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese name'));
    echo '<hr /> ';
        echo $this->Form->input('username', array('type'=>'text','class' =>'span12','placeholder' => 'Ingrese username'));
        //echo $this->Form->input('username', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese username'));
        echo '<hr /> ';
        echo $this->Form->input('password', array('class' =>'span12','placeholder' => 'Ingrese password'));
    
    echo '<hr /> ';
        echo $this->Form->input('password_confirmation', array('class' =>'span12','placeholder' => 'Confirme password','type' => 'password'));
      
    echo '<hr /> ';
     if($usuario['role']=='gerente'){
        echo $this->Form->input('role', array('class' =>'span12','label' => 'Rol', 'options' => array('gerente' => 'Gerente', 'organizador' => 'Organizador','empleado' => 'Empleado', 'cliente' => 'Cliente')
        ));//echo $this->Form->input('role', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese role'));
    }else{
        echo $this->Form->input('role', array('class' =>'span12','label' => 'Rol', 'options' => array($usuario['role'] => $usuario['role'])));
    }
    echo '<hr /> ';
        echo $this->Form->input('email', array('class' =>'span12','placeholder' => 'Ingrese email'));
        //echo $this->Form->input('email', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese email'));
    echo '<hr /> ';
    $this->Form->button("Submit Form", array("type" => "submit","class" => "btn btn-primary")); ?> 
    <button class='btn btn-primary'>Guardar</button>
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






