<?php
$currentUser = $this->Session->read('Auth.User');
if($currentUser['role']!='empleado'){
    echo '<script type="text/javascript">

window.location="../";

</script>';
}?>
<div class="row-fluid"><div class="span4"></div><div class="span4"></div><div class="span4"></div></div>
<div class="row-fluid">
        <div class="span4">
              <div class="box-body">
                <div class="block-image">
                    <div class="image-overlay">
                      <div class="image-big-text"><?php echo $this->Html->link('Calendario',array('controller' => 'eventos', 'action' => 'calendario'));?></div>
                      <div class="image-small-text"><?php echo $this->Html->link('de eventos',array('controller' => 'eventos', 'action' => 'calendario'));?></div>
                    </div>
	                 <?php echo $this->Html->image('calendario.jpg', array('style' =>'max-height: 180px' )); ?>
                </div>
              </div>     
        </div>
</div>

