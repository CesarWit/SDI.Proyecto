<h1> Listado de cursos </h1>

<?php 
foreach ($listado->result() as $curso): ?>

	<ul>
		<li>
			<?php echo form_open("cursosctr/editar") ?>
			<?php echo $curso -> nombre; ?>
			<?php $id = array('id' => $curso -> idcurso); ?>
			<?php echo form_hidden($id); ?>
			<?php echo form_submit("", 'editar') ?>
			<?php echo form_close() ?>
		</li>
	</ul>

<?php endforeach; ?>