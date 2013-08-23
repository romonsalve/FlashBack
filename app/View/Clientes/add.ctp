
<?php echo $this->Form->create('Cliente'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Registro de Cliente</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("clientes", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('cliente_tipo_id', array('class' =>'span12','label' => '¿Es usted un particular o una empresa?', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('rut', array('type'=>'text', 'class' =>'span12','label' => 'Ingrese su RUT', 'placeholder' => '', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('nombre', array('type'=>'text', 'class' =>'span12','label' => 'Nombre: (o Razón Social en caso de ser una empresa)', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('apellido_paterno', array('type'=>'text', 'class' =>'span12','label' => 'Apellido Paterno:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('apellido_materno', array('type'=>'text', 'class' =>'span12','label' => 'Apellido Materno:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('direccion', array('type'=>'text', 'class' =>'span12','label' => 'Dirección:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('fono', array('type'=>'text', 'class' =>'span12','label' => 'Teléfono:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->input('correo', array('type'=>'text', 'class' =>'span12','label' => 'Correo electrónico:', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Registrarse", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






