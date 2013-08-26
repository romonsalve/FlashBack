<?php 
$currentUser = $this->Session->read('Auth.User');
if($user['User']['id']!= $currentUser['id']){
  if($currentUser['role']!='gerente'){
    echo '<script type="text/javascript">

window.location="../";

</script>';
  }
}?>
 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('User'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("users", array('controller' => 'User', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver User", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->
        <hr />
        <div class="box-body">
          
                     <!-- Pricing table -->                     
                     <!-- Price details. Note down the class name before you edit. -->
                     <div class="row-fluid">
                     
                        <div class="span8 offset2">
                        
                           
                           <!-- Pricing table #1. -->
                           <div class="pricel center">
                                 <div class="phead-top b-orange">
                                    <!-- Title -->
                                    <h4>Información del <?php echo __('User').' '; ?> <?php echo $user['User']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

			<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($user['User']['name'])." &nbsp</div>";  ?></li>
      		<li><?php echo '<div class="col-l" style = "text-align: right;"> Username: </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($user['User']['username'])." &nbsp</div>";  ?></li>
          				<li><?php echo '<div class="col-l" style = "text-align: right;"> Tipo de usuario: </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($user['User']['role'])." &nbsp</div>";  ?></li>
                  		<li><?php echo '<div class="col-l" style = "text-align: right;"> Correo Electrónico </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($user['User']['email'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este User?', $user['User']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">

</div>

</div>
</div>
</div>
                
