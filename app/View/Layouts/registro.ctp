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

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse"
        data-target=".nav-collapse"></a>

        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li><?php echo $this->Html->link('Login',array('controller' => 'users', 'action' => 'login'));?> </li>
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
        <?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => $cakeDescription, 'border' => '0')), array('controller' => 'users', 'action' => 'login'),array('escape' => false)); ?>
      </div>

      <div class="sidebar-dropdown">
        <a href="#">Men&Atilde;&ordm;</a>
      </div><!--- Sidebar navigation -->
      <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
      <!-- Colors: Add the class "br-red" or "br-blue" or "br-green" or "br-orange" or "br-purple" or "br-yellow" to anchor tags to create colorful left border -->

      <div class="s-content"></div>

    </div>
  </div><!-- Mainbar starts -->

  <div class="mainbar" style="padding-top: 10px;">
    <?php echo $this->Session->flash(); ?><?php echo $this->fetch('content'); ?><?php //echo $this->element('sql_dump'); ?>
  </div><!-- Mainbar ends -->

  <div class="clearfix"></div><!-- Foot starts -->

  

  <div class="clearfix"></div><!-- Main content ends -->
  <!-- Scroll to top -->
  <span class="totop"><a href="#"></a></span>
</body>
</html>
