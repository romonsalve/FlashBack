<?php echo $this->Form->create('SolicitudCotizacione'); ?>
<?php
echo '<div id="listaPropiedades"> ';
//echo $this->Form->input('ParticipanteTipo', array('type'=>'select', 'multiple'=>'checkbox'));
echo '<h6> <?php echo ParticipanteTipo ?></h6> <hr />'; 		echo $this->Form->input('ParticipanteTipo', array('type' => 'select', 'multiple'=>'checkbox', 'label' => 'Escoja qué tipos de participantes le gustaría incluir en su evento:') );

echo '<h6> <?php echo Actividade ?></h6> <hr />'; 		echo $this->Form->input('Actividade', array('type' => 'select', 'multiple'=>'checkbox', 'label' => 'Escoja qué tipo de actividades le gustaría realizar en su evento:') );

echo '</div>';
?>


