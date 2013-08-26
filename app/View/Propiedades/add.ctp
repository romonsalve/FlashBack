
<?php echo $this->Form->create('Propiedade'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Agregando una Propiedad.</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("Propiedades", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('nombre', array('type'=> 'text', 'class' =>'span12','label' => 'Ingrese un nombre para la propiedad', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php echo '<div style="display:none">';
echo '<h6> <?php echo Recurso ?></h6> <hr />'; 		echo $this->Form->input('Recurso', array('type' => 'select', 'multiple'=>'checkbox', 'label' => 'Seleccione los recursos que tienen esta propiedad:') );
echo '</div>';
echo '<h6> <?php echo Medida ?></h6> <hr />'; 		echo $this->Form->input('Medida', array('type' => 'select', 'multiple'=>'checkbox', 'label' => 'Seleccione las unidades de medida que son capaces de medir esta propiedad:') );
echo '<h6> <?php echo RecursoTipo ?></h6> <hr />'; 		echo $this->Form->input('RecursoTipo', array('type' => 'select', 'multiple'=>'checkbox', 'label' => 'Seleccione los recursos tipo que podrían usar esta propiedad:') );
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






