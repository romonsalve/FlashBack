<div class="container-fluid" style= "padding: 80px 0;">
    <div class="row-fluid">
        <div class='span4' style = "text-align:center;">
			<h1>PROBLEMAS DE CONEXIÓN CON EL SERVIDOR</h1>
			<h2>Intente mas tarde</h2>
			<?php echo $this->Html->link($this->Html->image('net.png', array('border' => '0')), array('controller' => 'users', 'action' => 'login'),array('escape' => false)); ?>
		</div>
		<div class='span6' style="text-align:center;">
			<?php echo $this->Html->image('logo.png', array('border' => '0')) ?>
		</div>
	</div>
</div>
