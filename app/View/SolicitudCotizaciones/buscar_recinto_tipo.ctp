<?php echo $this->Form->create('SolicitudCotizacione'); ?>
<?php
echo '<div id="listaPropiedades"> ';
//echo $this->Form->input('ParticipanteTipo', array('type'=>'select', 'multiple'=>'checkbox'));
	echo '<hr /> ';
	echo $this->Form->input('recinto_tipo_id', 
		array('class' =>'span12','label' => 'Escoja un tipo de recinto:', 'placeholder' => '','error' =>
			array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
echo '</div>';
?>
