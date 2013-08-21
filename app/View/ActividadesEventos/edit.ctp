
<?php echo $this->Form->create('ActividadesEvento'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Actividades Evento</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">actividadesEventos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Actividades Evento</h6>
                <hr />

	<!--<?php echo __('Edit Actividades Evento'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('evento_id', array('class' =>'span9','placeholder' => 'Ingrese evento_id'));
				//echo $this->Form->input('evento_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_id'));
		echo '<hr /> ';
				echo $this->Form->input('actividade_id', array('class' =>'span9','placeholder' => 'Ingrese actividade_id'));
				//echo $this->Form->input('actividade_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese actividade_id'));
		echo '<hr /> ';
				echo $this->Form->input('fecha_ini_act', array('class' =>'span9','placeholder' => 'Ingrese fecha_ini_act'));
				//echo $this->Form->input('fecha_ini_act', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fecha_ini_act'));
		echo '<hr /> ';
				echo $this->Form->input('fecha_ter_act', array('class' =>'span9','placeholder' => 'Ingrese fecha_ter_act'));
				//echo $this->Form->input('fecha_ter_act', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese fecha_ter_act'));
		echo '<hr /> ';
				echo $this->Form->input('estado_act', array('class' =>'span9','placeholder' => 'Ingrese estado_act'));
				//echo $this->Form->input('estado_act', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese estado_act'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActividadesEvento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ActividadesEvento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


