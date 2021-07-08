<h1> Editar curso </h1>

<?php echo form_open("/cursosctr/actualizar") ?>

<?php 
$nombre = array('name' => 'nombre', 
	'placeholder' => 'Nombre de curso', 
	'value' => $listado -> result()[0] -> nombre); 
$id = array('id' => $listado -> result()[0]  -> idcurso);
?>

<?php form_label("Nombre: ",'nombre') ?>
<?php echo form_input($nombre); ?>
<?php echo form_hidden($id); ?>

<?php echo form_submit("", ' actualizar ') ?>
<?php echo form_close() ?>