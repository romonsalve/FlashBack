<?php
$cakeDescription = __d('cake_dev', 'Flashback');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');
	
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('flexslider');
		echo $this->Html->css('prettyPhoto');
		echo $this->Html->css('style');
		echo $this->Html->css('bootstrap-responsive');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<?php echo $this->Html->script('jquery'); ?>
	<?php echo $this->Html->script('bootstrap'); ?>
	<?php echo $this->Html->script('filter'); ?>
	<?php echo $this->Html->script('jquery.carouFredSel-6.1.0-packed'); ?>
	<?php echo $this->Html->script('jquery.flexslider-min'); ?>
	<?php echo $this->Html->script('jquery.isotope'); ?>
	<?php echo $this->Html->script('jquery.prettyPhoto'); ?>
	<?php echo $this->Html->script('jquery.tweet'); ?>
	<?php echo $this->Html->script('custom'); ?>
<!-- !-->

</head>
<body>
<!-- Navbar starts -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
           <li><?php echo $this->Html->link('Registrar',array('controller' => 'clientes', 'action' => 'add'));?> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- Navbar ends -->

<!-- Main content starts -->

<div class="content">
  
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
</div>

<div class="clearfix"></div>

<!-- Main content ends -->
	
<!-- Footer -->
<footer>
            <div class="bor"></div>
            <p>Todos los derechos reservados a Flashback</p>
      
</footer>		

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 
</body>
</html>
