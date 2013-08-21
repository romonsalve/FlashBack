
<?php echo $this->Form->create('Proveedore'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Proveedore</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">proveedores</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <h6>Edit Proveedore</h6>
                <hr />

	<!--<?php echo __('Edit Proveedore'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('rut_pro', array('class' =>'span9','placeholder' => 'Ingrese rut_pro'));
				//echo $this->Form->input('rut_pro', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese rut_pro'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_pro', array('class' =>'span9','placeholder' => 'Ingrese nombre_pro'));
				//echo $this->Form->input('nombre_pro', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_pro'));
		echo '<hr /> ';
				echo $this->Form->input('direccion_pro', array('class' =>'span9','placeholder' => 'Ingrese direccion_pro'));
				//echo $this->Form->input('direccion_pro', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese direccion_pro'));
		echo '<hr /> ';
				echo $this->Form->input('fono_pro', array('class' =>'span9','placeholder' => 'Ingrese fono_pro'));
				//echo $this->Form->input('fono_pro', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fono_pro'));
		echo '<hr /> ';
				echo $this->Form->input('correo_pro', array('class' =>'span9','placeholder' => 'Ingrese correo_pro'));
				//echo $this->Form->input('correo_pro', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese correo_pro'));
		echo '<hr /> ';
				echo $this->Form->input('ranking_pro', array('class' =>'span9','placeholder' => 'Ingrese ranking_pro'));
				//echo $this->Form->input('ranking_pro', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese ranking_pro'));
		echo '<hr /> ';
				echo $this->Form->input('contrato_pro', array('class' =>'span9','placeholder' => 'Ingrese contrato_pro'));
				//echo $this->Form->input('contrato_pro', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese contrato_pro'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_conta', array('class' =>'span9','placeholder' => 'Ingrese nombre_conta'));
				//echo $this->Form->input('nombre_conta', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_conta'));
		echo '<hr /> ';
				echo $this->Form->input('apellido_conta', array('class' =>'span9','placeholder' => 'Ingrese apellido_conta'));
				//echo $this->Form->input('apellido_conta', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese apellido_conta'));
		echo '<hr /> ';
				echo $this->Form->input('correo_conta', array('class' =>'span9','placeholder' => 'Ingrese correo_conta'));
				//echo $this->Form->input('correo_conta', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese correo_conta'));
		echo '<hr /> ';
				echo $this->Form->input('fono_conta', array('class' =>'span9','placeholder' => 'Ingrese fono_conta'));
				//echo $this->Form->input('fono_conta', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fono_conta'));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo RecursoTipo ?></h6> <hr />'; 		echo $this->Form->input('RecursoTipo', array('type' => 'select', 'multiple'=>'checkbox') );
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proveedore.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Proveedore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurso Tipos'), array('controller' => 'recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso Tipo'), array('controller' => 'recurso_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


