<?php echo $this->Form->create('Evento'); ?>
<div id = "listaRecintos">
	<?php
echo '<h6>  <?php echo Recurso ?></h6> <hr />'; 		
echo $this->Form->input('Recurso', array('type' => 'select', 'multiple'=>'checkbox') );
?>
</div>