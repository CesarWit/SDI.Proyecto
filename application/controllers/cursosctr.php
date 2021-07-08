<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CursosCTR extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this -> load -> helper('form');
		$this -> load -> model('cursos_model');
	}

	public function agregar(){
		$this -> load -> view('formagregarcursos_view');
	}

	public function setcurso(){
		//print_r($this -> input -> post());
		$data = array('nombre' => $this -> input -> post('nombre') );
		$this -> cursos_model -> insertarCurso($data);
	}

	public function getCursos(){
		$data['listado'] = $this -> cursos_model -> getCursos();
		$this -> load -> view('cursos_view',$data);
	}

	public function editar(){
		$identificador =  $this -> input -> post('id');
		$data['listado'] = $this -> cursos_model -> getCursos($identificador);
		$this -> load -> view('editarcursos_view', $data);
	}

	public function actualizar(){
		print_r($this -> input -> post());
	}

}
