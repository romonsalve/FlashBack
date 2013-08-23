
<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!<?php echo Inflector::humanize($action) ?> <?php echo $singularHumanName ?></h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<? echo '<?php echo $this->TwitterBootstrap->add_crumb("' . $pluralVar . '", \'index\');';
	   echo 'echo $this->TwitterBootstrap->add_crumb("' . Inflector::humanize($action) . '", null);';
	   echo 'echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>';
		 ?>

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div <?php if (!empty($associations['hasAndBelongsToMany'])) echo "class='span6'"; else echo "class='span8'" ?> >
              <div class="well">
                <hr />
<?php  
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\techo \$this->Form->input('{$field}', array('class' =>'span12','label' => 'Ingrese {$field}', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));\n\t\t";
				
				echo "echo '<hr /> ';\n\t\t";
			}
		}

		if (!empty($associations['hasAndBelongsToMany'])) {
			
	echo "\t?>\n";?>	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
	<?php echo "\t<?php\n";
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) { 
			    echo "echo '<h6> <?php echo {$assocName} ?></h6> <hr />'; ";
			    echo "\t\techo \$this->Form->input('{$assocName}', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );\n";
			}
		}
		
	
	echo 'echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));';

echo "\t?> \n";
?>
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






