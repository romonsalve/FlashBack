
<?php echo $this->Form->create('ActividadesEventoTipo'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Actividades Evento Tipo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">actividadesEventoTipos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Actividades Evento Tipo</h6>
                <hr />

	<!--<?php echo __('Edit Actividades Evento Tipo'); ?></legend>-->
	<?php
		echo $this->Form->input('evento_tipo_id', array('class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
				//echo $this->Form->input('evento_tipo_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_tipo_id'));
		echo '<hr /> ';
				echo $this->Form->input('actividade_id', array('class' =>'span9','placeholder' => 'Ingrese actividade_id'));
				//echo $this->Form->input('actividade_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese actividade_id'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActividadesEventoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ActividadesEventoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades Evento Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Evento Tipos'), array('controller' => 'evento_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento Tipo'), array('controller' => 'evento_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


