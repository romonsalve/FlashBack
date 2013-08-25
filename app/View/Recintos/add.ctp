
<?php echo $this->Form->create('Recinto'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Add Recinto</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("recintos", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('recinto_tipo_id', array('class' =>'span12','label' => 'Escoja un tipo de recinto:', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('nombre', array('type' => 'text', 'class' =>'span12','label' => 'Ingrese un nombre para este recinto:', 'placeholder' => 'La Almeja Borracha',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('mapa', array('class' =>'span12','label' => 'Ingrese mapa', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('dimension', array('type' => 'text','class' =>'span12','label' => 'Ingrese las dimensiones del recinto', 'placeholder' => '3000 m2',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('ubicacion', array('class' =>'span12','label' => '¿Dónde se ubica este recinto?', 'placeholder' => 'Saliendo de Santiago por la carretera 9',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






