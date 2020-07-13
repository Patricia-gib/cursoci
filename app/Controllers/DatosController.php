<?php namespace App\Controllers;

class DatosController extends BaseController {

	public function index() {
	}

	public function datosAction($nombre, $apellido1, $apellido2){
		$data['nombre'] = $nombre;
		$data['apellido1'] = $apellido1;
		$data['apellido2'] = $apellido2;
		return view('persona/datos', $data);
	}

	public function listarAction(){
		// Definir listado de Datos
		$lista = array(
			array('nombre'=>'Nombre : Patricia'),
			array('apellido1'=>'1er. Apellido : Surco'),
			array('apellido2'=>'2do. Apellido : Andia'),
		);
		// Adicionar lista en $data
		$data['datos']=$lista;
		// Llamar a la vista
		return view('persona/datos', $data);
	}
}