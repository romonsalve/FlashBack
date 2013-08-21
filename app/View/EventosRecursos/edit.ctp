
<?php echo $this->Form->create('EventosRecurso'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Eventos Recurso</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">eventosRecursos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Eventos Recurso</h6>
                <hr />

	<!--<?php echo __('Edit Eventos Recurso'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('evento_id', array('class' =>'span9','placeholder' => 'Ingrese evento_id'));
				//echo $this->Form->input('evento_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese evento_id'));
		echo '<hr /> ';
				echo $this->Form->input('recurso_id', array('class' =>'span9','placeholder' => 'Ingrese recurso_id'));
				//echo $this->Form->input('recurso_id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese recurso_id'));
		echo '<hr /> ';
				echo $this->Form->input('cantidad', array('class' =>'span9','placeholder' => 'Ingrese cantidad'));
				//echo $this->Form->input('cantidad', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese cantidad'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventosRecurso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EventosRecurso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos Recursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursos'), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurso'), array('controller' => 'recursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


