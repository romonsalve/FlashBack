
<?php echo $this->Form->create('PropiedadesRecursoTipo'); ?>
<?php
echo '<div id="listaPropiedades"> ';
echo $this->Form->input('medida_id', array('class' =>'span12','label' => 'Ingrese medida_id', 'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
echo '<hr /></div>';
?>