
<?php echo $this->Form->create('MedidasPropiedade'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Add Medidas Propiedade</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("medidasPropiedades", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('medida_id', array('class' =>'span12','label' => 'Ingrese medida_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('propiedade_id', array('class' =>'span12','label' => 'Ingrese propiedade_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






