<h1> Registrar curso </h1>

<?php echo form_open("/cursosctr/setcurso") ?>

<?php 
$nombre = array('name' => 'nombre', 'placeholder' => 'Nombre de curso'); 
?>

<?php form_label("Nombre: ",'nombre') ?>

<?php echo form_input($nombre); ?>

<?php echo form_submit("", ' registrar ') ?>

<?php echo form_close() ?>