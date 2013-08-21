
<?php echo $this->Form->create('Participante'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Add Participante</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">participantes</a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Participante</h6>
                <hr />

	<!--<?php echo __('Add Participante'); ?></legend>-->
	<?php
		echo $this->Form->input('participante_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese participante_tipo_id'));
				//echo $this->Form->input('participante_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese participante_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_artistico_par', array('class' =>'span9','placeholder' => 'Ingrese nombre_artistico_par'));
				//echo $this->Form->input('nombre_artistico_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_artistico_par'));
		echo '<hr /> ';
				echo $this->Form->input('desc_par', array('class' =>'span9','placeholder' => 'Ingrese desc_par'));
				//echo $this->Form->input('desc_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_par'));
		echo '<hr /> ';
				echo $this->Form->input('ranking_par', array('class' =>'span9','placeholder' => 'Ingrese ranking_par'));
				//echo $this->Form->input('ranking_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese ranking_par'));
		echo '<hr /> ';
				echo $this->Form->input('contrato_par', array('class' =>'span9','placeholder' => 'Ingrese contrato_par'));
				//echo $this->Form->input('contrato_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese contrato_par'));
		echo '<hr /> ';
				echo $this->Form->input('rut_cont_par', array('class' =>'span9','placeholder' => 'Ingrese rut_cont_par'));
				//echo $this->Form->input('rut_cont_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese rut_cont_par'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_cont_par', array('class' =>'span9','placeholder' => 'Ingrese nombre_cont_par'));
				//echo $this->Form->input('nombre_cont_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_cont_par'));
		echo '<hr /> ';
				echo $this->Form->input('apellidop_cont_par', array('class' =>'span9','placeholder' => 'Ingrese apellidop_cont_par'));
				//echo $this->Form->input('apellidop_cont_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese apellidop_cont_par'));
		echo '<hr /> ';
				echo $this->Form->input('apellidom_cont_par', array('class' =>'span9','placeholder' => 'Ingrese apellidom_cont_par'));
				//echo $this->Form->input('apellidom_cont_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese apellidom_cont_par'));
		echo '<hr /> ';
				echo $this->Form->input('direccion_cont_par', array('class' =>'span9','placeholder' => 'Ingrese direccion_cont_par'));
				//echo $this->Form->input('direccion_cont_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese direccion_cont_par'));
		echo '<hr /> ';
				echo $this->Form->input('fono_cont_par', array('class' =>'span9','placeholder' => 'Ingrese fono_cont_par'));
				//echo $this->Form->input('fono_cont_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fono_cont_par'));
		echo '<hr /> ';
				echo $this->Form->input('correo_cont_par', array('class' =>'span9','placeholder' => 'Ingrese correo_cont_par'));
				//echo $this->Form->input('correo_cont_par', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese correo_cont_par'));
		echo '<hr /> ';
		$this->Form->button("Submit Form", array("type" => "submit","class" => "btn btn-primary"));	?> 
		<button class='btn btn-primary'>Guardar</button>
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






<!--


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Participante Tipos'), array('controller' => 'participante_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante Tipo'), array('controller' => 'participante_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


