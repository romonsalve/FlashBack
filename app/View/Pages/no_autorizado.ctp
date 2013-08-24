<?php
$cakeDescription = __d('cake_dev', 'Flashback');
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>

	<div class="container-fluid" style= "padding: 80px 0;">
    <div class="row-fluid">
        <div class='span7' style = "text-align:center;">
			<h1>NO TIENES AUTORIZACIÓN PARA ENTRAR A ESTA SECCIÓN</h1>
			<h2> Contactate con un administrador</h2>
		</div>
		<div class='span5' style = "text-align:center;" >
			<?php echo $this->Html->image('stop-icon.png', array('border' => '0')) ?>

		</div>
	</div>
</div>
</div>
</body>
</html>
