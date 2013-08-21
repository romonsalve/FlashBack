<?php echo $this->Form->create(__(''));?>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">  
         <div class="well login-register">
                <h5>Login</h5>
                <hr />
                    <!-- Login form -->
                <form class="form-horizontal">
                      <!-- Email -->
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Usuario</label>
                        <div class="controls">
						<?php echo $this->Form->input('username', array('label' => '', 'type' => 'text','placeholder'=>'Usuario'));?>
                        </div>
                      </div>
                      <!-- Password -->
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Contraseña</label>
                        <div class="controls">
                          <?php echo $this->Form->input('password', array('label' => '', 'type' => 'password','placeholder'=>'Contraseña'));	?>
                        </div>
                      </div>
                      <!-- Remember me checkbox and sign in button -->
                      <div class="control-group">
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox"> Recordar Contraseña
		        </label>
                          <br>
						  
                          <button type="submit" class="btn">Entrar<?php echo $this->Form->end(__('')); ?> </button>
                          <button type="reset" class="btn">Limpiar</button>
                        </div>
                      </div>
               </form>
         </div>
      </div>
    </div>
  </div>
