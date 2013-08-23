
<?php echo $this->Form->create('RecintoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Agregando un tipo de recinto</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("Tipos de Recinto", 'index');echo $this->TwitterBootstrap->add_crumb("Agregar", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('nombre', array('type' => 'text', 'class' =>'span12','label' => 'Escriba un nombre para el tipo de recinto nuevo:', 'placeholder' => 'Centro de Eventos', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo EventoTipo ?></h6> <hr />'; 		echo $this->Form->input('EventoTipo', array('type' => 'select', 'multiple'=>'checkbox', 'label' => 'Escoja los tipos de evento adecuados para este tipo de recinto') );
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






