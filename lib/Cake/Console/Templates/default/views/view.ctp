 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo "<?php echo __('{$singularHumanName}'); ?>"; ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="index"><?php echo "<?php echo __('{$singularHumanName}'); ?>"; ?></a> <span class="divider">/</span></li>
          <li class="active">Ver</li>
        </ul>        

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
                                    <h4>Información del <?php echo "<?php echo __('{$singularHumanName}').' '; ?>"; ?> <?php echo "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}']; ?>"; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
				echo '<li><?php echo "';
				echo "<div class='col-l' style = 'text-align: right;'> ".Inflector::humanize(Inflector::underscore($alias))."</div>:<div class='col-r' style = 'text-align: left;'> \".";
				echo "\$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])).\" &nbsp</div>\"; ?> </li>";
				break;
			}
		}
	}
	if ($isKey !== true) {
		echo "\t\t<li><?php echo '<div class=\"col-l\" style = \"text-align: right;\"> ". Inflector::humanize($field) ." </div> '; ?>";
		echo "\t\t<?php echo \":<div class='col-r' style = 'text-align: left;'>\".h(\${$singularVar}['{$modelClass}']['{$field}']).\" &nbsp</div>\";  ?></li>";
	}
}
?>
</ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
				<?php echo "\t\t<?php echo \$this->Html->link(__('Editar'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'btn')); ?> \n"; 

				echo "\t\t<?php echo \$this->Form->postLink(__('Eliminar'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este ". $singularHumanName."?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
	<ul>
<?php
	echo "\t\t<li><?php echo \$this->Html->link(__('Edit " . $singularHumanName ."'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
	echo "\t\t<li><?php echo \$this->Form->postLink(__('Delete " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
	echo "\t\t<li><?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?> </li>\n";
	echo "\t\t<li><?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?> </li>\n";

	$done = array();
	foreach ($associations as $type => $data) {
		foreach ($data as $alias => $details) {
			if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
				echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
				echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
				$done[] = $details['controller'];
			}
		}
	}
?>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
<?php
$asdf = 0;
if (!empty($associations['hasOne'])) :
	foreach ($associations['hasOne'] as $alias => $details): $asdf++;?>   	
			<hr />
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $asdf; ?>">
                           <!-- Title with experience details. -->
                          <h5><?php echo "<?php echo __(' <i class=\"icon-chevron-down\"></i> Relación con " . Inflector::humanize($details['controller']) . "'); ?>"; ?></h5>
                        </a>
                      </div>
                      <div id="collapse<?php echo $asdf; ?>" class="accordion-body collapse">
                        <div class="accordion-inner">

	<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
		<dl>
	<?php
			foreach ($details['fields'] as $field) {
				echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
				echo "\t\t<dd>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}']; ?>\n&nbsp;</dd>\n";
			}
	?>
		</dl>
	<?php echo "<?php endif; ?>\n"; ?>
				<div class="actions">
					<ul>
						<li><?php echo "<?php echo \$this->Html->link(__('Editar " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n"; ?>
					</ul>
				</div>
			</div>
                     </div>
                   </div>
	<?php
	endforeach;
endif;
if (empty($associations['hasMany'])) {
	$associations['hasMany'] = array();
}
if (empty($associations['hasAndBelongsToMany'])) {
	$associations['hasAndBelongsToMany'] = array();
}
$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
$i = 0;
foreach ($relations as $alias => $details):
	$otherSingularVar = Inflector::variable($alias);
	$otherPluralHumanName = Inflector::humanize($details['controller']);
	$asdf++;
	?>
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $asdf; ?>">
                           <!-- Title with experience details. -->
                  <h5><?php echo "<?php echo __(' <i class=\"icon-chevron-down\"></i> Relación con " . $otherPluralHumanName . "'); ?>"; ?></h5>
                </a>
            </div>
            <div id="collapse<?php echo $asdf; ?>" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
<?php
			foreach ($details['fields'] as $field) {
				echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
			}
?>
		<th><?php echo "<?php echo __('Acciones'); ?>"; ?></th>
	</tr>
	</thead>
        <tbody>

<?php
echo "\t<?php
		\$i = 0;
		foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
		echo "\t\t<tr>\n";
			foreach ($details['fields'] as $field) {
				echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}']; ?></td>\n";
			}

			echo "\t\t\t<td class=\"actions\">\n";
			echo "\t\t\t\t<?php echo \$this->Html->link(__('Ver'), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
			echo "\t\t\t\t<?php echo \$this->Html->link(__('Editar'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
			echo "\t\t\t\t<?php echo \$this->Form->postLink(__('Eliminar'), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
			echo "\t\t\t</td>\n";
		echo "\t\t</tr>\n";

echo "\t<?php endforeach; ?>\n";
?>	</tbody>
	</table>
<?php echo "<?php endif; ?>\n\n"; ?>
		<div class="actions">
			<ul>
				<li><?php echo "<?php echo \$this->Html->link(__('Nuevo " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?>"; ?> </li>
			</ul>
		</div>
	     </div></div></div>

<?php endforeach; ?>

</div>

</div>
</div>
</div>
                
