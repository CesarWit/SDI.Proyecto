<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class cursos_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this -> load -> database();
	}

	public function insertarCurso($data){
		$this -> db -> insert('cursos', array('nombre' => $data['nombre']) );
	}

	public function getCursos(){
		$query = $this -> db -> get('cursos');
		return $query;
	}

	public function getCurso($identificador){
		$this -> db -> where('idcurso', $identificador);
		$query = $this -> db -> get('cursos');
		if($query -> num_rows()>0){
			return $query;
		} else {
			return false;
		}
	}
}
