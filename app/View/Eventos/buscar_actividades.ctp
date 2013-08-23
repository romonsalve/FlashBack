<?php echo $this->Form->create('Evento'); ?>
<hr />
<div id = "listaRecintos">
	<?php
	echo '<h6> <?php echo Actividade ?></h6> <hr />'; 		echo $this->Form->input('Actividade', array('type' => 'select', 'multiple'=>'checkbox') );
	?>
</div>