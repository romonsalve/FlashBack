<script type="text/javascript">
function obtenerPropiedades(valor){
  alert('/FlashBack/propiedadesRecursoTipos/buscaMedida/'+valor+'/'+<?php echo $id;?> +' #listaPropiedades');
  $('#medida').load('/FlashBack/propiedadesRecursoTipos/buscaMedida/'+valor+'/'+<?php echo $id;?> +' #listaPropiedades');
}
</script>

<?php echo $this->Form->create('PropiedadesRecursoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Edit Propiedades Recurso Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("propiedadesRecursoTipos", 'index');echo $this->TwitterBootstrap->add_crumb("Edit", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('id', array('class' =>'span12','label' => 'Ingrese id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
      echo "<div id='medida'>";
				echo $this->Form->input('medida_id', array('class' =>'span12','label' => 'Ingrese medida_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
      echo "</div>";
				echo $this->Form->input('propiedade_id', array('class' =>'span12','label' => 'Ingrese propiedade_id', 'placeholder' => '', 'onchange' => 'obtenerPropiedades(this.value)',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('recurso_tipo_id', array('class' =>'span12','label' => 'Ingrese recurso_tipo_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('maximo_medida', array('class' =>'span12','label' => 'Ingrese maximo_medida', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('minimo_medida', array('class' =>'span12','label' => 'Ingrese minimo_medida', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>
            </div>
          </div>
        </div>

        <!-- Content ends -->

      </div>






