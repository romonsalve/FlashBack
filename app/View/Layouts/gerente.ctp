<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Flashback');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
  <?php echo $this->Html->charset(); ?>

  <title><?php echo $cakeDescription ?>:
  <?php echo $title_for_layout; ?></title>
  <meta name="viewport" content=
  "width=device-width, initial-scale=1.0"><?php
                  echo $this->Html->meta('icon');
          
                  echo $this->Html->css('bootstrap');
                  echo $this->Html->css('flexslider');
                  echo $this->Html->css('prettyPhoto');
                  echo $this->Html->css('style');
                  echo $this->Html->css('bootstrap-responsive');
                  //CALENDARIO
                  echo $this->Html->css('fullcalendar');
                  echo $this->Html->css('fullcalendar.print');

                  echo $this->fetch('meta');
                  echo $this->fetch('css');
                  echo $this->fetch('script');
          ?><?php echo $this->Html->script('jquery'); ?><?php echo $this->Html->script('bootstrap'); ?><?php echo $this->Html->script('filter'); ?><?php echo $this->Html->script('jquery.carouFredSel-6.1.0-packed'); ?><?php echo $this->Html->script('jquery.flexslider-min'); ?><?php echo $this->Html->script('jquery.isotope'); ?><?php echo $this->Html->script('jquery.prettyPhoto'); ?><?php echo $this->Html->script('jquery.tweet'); ?><?php echo $this->Html->script('custom'); 
                  //CALENDARIO
                  echo $this->Html->script('jquery-1.10.2.min'); 
                  echo $this->Html->script('jquery-ui-1.10.3.custom.min'); 
                  echo $this->Html->script('fullcalendar.min'); 
  ?><!-- !-->
</head>

<body>
  <!-- Navbar starts -->
<?php $user = $this->Session->read('Auth.User');?>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse"
        data-target=".nav-collapse"></a>

        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
      <li><a class="dropdown-toggle"><?php echo "Bienvenido ".$user['name'];?></a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle=
              "dropdown">Mi Cuenta</a>

              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Ver cuenta',array('controller' => 'users', 'action' => 'view/'.$user['id']));?> </li>

                <li><?php echo $this->Html->link('Salir (logout)',array('controller' => 'users', 'action' => 'logout'));?> </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- Navbar ends -->

  <div class="content">
    <!-- Sidebar starts -->

    <div class="sidebar">
      <!-- Logo -->

      <div class="logo">
        <?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => $cakeDescription, 'border' => '0')), 'index',                array('escape' => false)); ?>
      </div>

      <div class="sidebar-dropdown">
        <a href="#">Men&Atilde;&ordm;</a>
      </div><!--- Sidebar navigation -->
      <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
      <!-- Colors: Add the class "br-red" or "br-blue" or "br-green" or "br-orange" or "br-purple" or "br-yellow" to anchor tags to create colorful left border -->

      <div class="s-content"></div>

      <ul id="nav">
        <li>
        <?php echo $this->Html->link('<i class="icon-home icon-white"></i>Calendario de Eventos', array(
            'controller' => 'eventos', 'action' => 'index'), array('class'=>'open br-green','escape' => false) ); ?></li>

        <li class="has_sub">
          <?php echo $this->Html->link('<i class="icon-home icon-white"></i>Cotizaciones<span class="pull-right"><i class="icon-chevron-right icon-white"></i></span></a>', array(), array('class'=>'open br-purple','escape' => false) ); ?>

          <ul>
            <li>
            <?php echo $this->Html->link('Cotizaciones Pendientes', array('controller'=>'solicitudCotizaciones','action' => 'index/1')); ?></li>

            <li>
            <?php echo $this->Html->link('Cotizaciones Preaprobadas', array('controller'=>'solicitudCotizaciones','action' => 'index/2')); ?></li>

            <li>
            <?php echo $this->Html->link('Cotizaciones Aprobadas', array('controller'=>'solicitudCotizaciones','action' => 'index/3')); ?></li>

            <li>
            <?php echo $this->Html->link('Cotizaciones Rechazadas', array('controller'=>'solicitudCotizaciones','action' => 'index/4')); ?></li>
          </ul>
        </li>

        <li class="has_sub">
          <?php echo $this->Html->link('<i class="icon-home icon-white"></i>Contratos<span class="pull-right"><i class="icon-chevron-right icon-white"></i></span></a>', array(), array('class'=>'open br-purple','escape' => false) ); ?>

          <ul>
            <li>
            <?php echo $this->Html->link('Proveedores', array('controller'=>'proveedores','action' => 'index')); ?></li>

            <li>
            <?php echo $this->Html->link('Empleados', array('controller'=>'empleados','action' => 'index')); ?></li>

            <li>
            <?php echo $this->Html->link('Participantes', array('controller'=>'participantes','action' => 'index')); ?></li>
          </ul>
        </li>

        <li>
        <?php echo $this->Html->link('<i class="icon-home icon-white"></i>Eventos Predeterminados ', array(
            'controller' => 'eventoTipos', 'action' => 'index'), array('class'=>'open br-orange','escape' => false) ); ?></li>

        <li class="has_sub">
          <?php echo $this->Html->link('<i class="icon-home icon-white"></i>Recursos<span class="pull-right"><i class="icon-chevron-right icon-white"></i></span></a>', array(), array('class'=>'open br-purple','escape' => false) ); ?>

          <ul>
            <li>
            <?php echo $this->Html->link('Listaod recursos', array('controller'=>'recursos','action' => 'index')); ?></li>

            <li>
            <?php echo $this->Html->link('Definir recursos', array('controller'=>'recursoTipos','action' => 'index')); ?></li>
          </ul>
        </li>

        <li>
        <?php echo $this->Html->link('<i class="icon-user icon-white"></i>Personal</a>', array(
            'controller' => 'Empleados', 'action' => 'index'), array('class'=>'open br-purple','escape' => false) ); ?></li>

        <li>
        <?php echo $this->Html->link('<i class="icon-user icon-white"></i>Proveedores</a>', array(
            'controller' => 'Proveedores', 'action' => 'index'), array('class'=>'open br-orange','escape' => false) ); ?></li>

        <li>
        <?php echo $this->Html->link('<i class="icon-user icon-white"></i>Participantes</a>', array(
            'controller' => 'Participantes', 'action' => 'index'), array('class'=>'open br-red','escape' => false) ); ?></li>

        <li>
        <?php echo $this->Html->link('<i class="icon-tag icon-white"></i>Vehiculos</a>', array(
            'controller' => 'Vehiculos', 'action' => 'index'), array('class'=>'open br-green','escape' => false) ); ?></li>
      </ul>
    </div>
  </div><!-- Mainbar starts -->

  <div class="mainbar" style="padding-top: 10px;">
    <?php echo $this->Session->flash(); ?><?php echo $this->fetch('content'); ?><?php //echo $this->element('sql_dump'); ?>
  </div><!-- Mainbar ends -->

  <div class="clearfix"></div><!-- Foot starts -->

  <div class="foot">
    <div class="bor"></div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span8">
          <div class="fwidget">
            <div class="col-l">
              <h6>Ir a</h6>

              <ul>
                <li><a href="#">asdf</a></li>
              </ul>
            </div>

            <div class="col-r">
              <h6>Ir a</h6>

              <ul>
                <li><a href="#">hi</a></li>
              </ul>
            </div>

            <div class="clearfix"></div>
          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>Creadores</h6>

            <ul>
              <li><a href="#">Sebastian Araya</a></li>

              <li><a href="#">Manuel Rubio</a></li>

              <li><a href="#">Camila Castillo</a></li>

              <li><a href="#">Rodrigo Monsalve</a></li>

              <li><a href="#">Yanina Ovando</a></li>

              <li><a href="#">Luis Felipe</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span12">
          <hr class="visible-desktop">

          <div class="copy">
            Todos los derechos reservados a Flashback
          </div>
        </div>
      </div>
    </div>
  </div><!-- Foot ends -->

  <div class="clearfix"></div><!-- Main content ends -->
  <!-- Scroll to top -->
  <span class="totop"><a href="#"></a></span>
</body>
</html>
