
<?php echo $this->Form->create('Medida'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Editando una unidad de medida.</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("medidas", 'index');echo $this->TwitterBootstrap->add_crumb("Edit", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('id', array('class' =>'span12','label' => 'Ingrese id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('nombre', array('type' => 'text','class' =>'span12','label' => 'Ingrese un nombre para la medida', 'placeholder' => 'Metros','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo Propiedade ?></h6> <hr />'; 		echo $this->Form->input('Propiedade', array('type' => 'select', 'multiple'=>'checkbox', 'label' => Seleccione las propiedades que se miden con esta unidad de medida:) );
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






