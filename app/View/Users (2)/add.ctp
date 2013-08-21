      <div class="span12">  
                   <div class="well login-register">
                
                   <h5>Register</h5>
                   <hr>

                    <div class="form">
                                      <!-- Register form (not working)-->
				<?php echo $this->Form->create('User', array('class'=>'form-horizontal')); ?>
                                         <!-- Name -->
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nombre</label>
                                       <div class="controls">
<?php echo $this->Form->input('name', array('label'=>'','type'=>'text','class'=>'input-large','placeholder'=>'Ingrese su nombre')); ?>

                                        </div>
                                          </div>  
<!-- Name -->
                                    <div class="control-group">
                                        <label class="control-label" for="name">Cuenta usuario</label>
                                       <div class="controls">
<?php echo $this->Form->input('username', array('label'=>'','type'=>'text','class'=>'input-large','placeholder'=>'Ingrese cuenta de usuario')); ?>

                                        </div>
                                          </div>   
                                          <!-- Email -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Contraseña</label>
                                            <div class="controls">
	
<?php echo $this->Form->input('password', array('label'=>'','class'=>'input-large')); ?>
                                            </div>
                                          </div>
                                          <!-- Select box -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Rol</label>
                                            <div class="controls">
<?php echo $this->Form->input('role', array('label'=>'','type'=>'text','class'=>'input-large')); ?>
                                            </div>
                                          </div>

                                          <!-- Password -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Correo</label>
                                            <div class="controls">
<?php echo $this->Form->input('email', array('label'=>'','type'=>'text','class'=>'input-large')); ?> 
                                            </div>
                                          </div>
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
	<? echo $this->Form->button("Agregar", array("type" => "submit","class" => "btn btn-primary"));	?> 
                                            <button type="reset" class="btn">Limpiar</button>
                                          </div>
                                      </form>
                                             Ya tengo una cuenta <?php echo $this->Html->link('Ingresar', array('controller'=>'pages', 'action' => 'login') ) ?>
                                    </div> 
                                  </div>
                   </div>

