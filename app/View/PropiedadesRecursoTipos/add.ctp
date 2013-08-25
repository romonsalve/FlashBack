<script type="text/javascript">
function obtenerPropiedades(valor){
  $('#medida').load('/FlashBack/propiedadesRecursoTipos/buscaMedida/'+valor+' #listaPropiedades');
}
</script>
<?php echo $this->Form->create('PropiedadesRecursoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Agregando Restricción</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("propiedadesRecursoTipos", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span8' >
              <div class="well">
                <hr />
  <?php
    echo $this->Form->input('recurso_tipo_id', array('class' =>'span12','label' => 'Para este recurso', 'placeholder' => '',
    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    echo '<hr /> ';
    echo $this->Form->input('propiedade_id', array('class' =>'span12','label' => 'La propiedad', 'placeholder' => '', 'onchange' => 'obtenerPropiedades(this.value)',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    echo '<hr /> ';

		echo '<hr /> ';
    echo "<div id = 'medida'>";
    echo '</div> ';
    
        echo $this->Form->input('minimo_medida', array('class' =>'span12','label' => 'Con un mínimo de...', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    echo '<hr /> ';
        echo $this->Form->input('maximo_medida', array('class' =>'span12','label' => 'Y un máximo de...', 'placeholder' => '','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
    echo '<hr /> ';
        
		echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






