<?php namespace App\Controllers;

class DatosPController extends BaseController {

	public function index() {
	}
		public function datosAction($nombre, $sueldo){
		echo "REFERENCIAS...",'<br/>';
		$mensaje = 'Nombre:'.$nombre.'<br/>';
		$mensaje .= 'Sueldo:'.$sueldo.'<br/>';
		echo $mensaje;
		$descuento =500;
		$data['descuento'] = $descuento;
		$data['sueldo_liquido'] = $sueldo - $descuento;
		return view('persona/datos2', $data);
	}
		public function listarAction(){
		// Definir listado de datos
		$lista = array(
			array('nombre'=>'Nombre : Patricia'),
			array('sueldo'=>'Sueldo : Bs. 5.000'),
			array('liquidop'=>'Liquido Pagable : Bs. 500'),
			array('total'=>'Total : Bs. 4.500'),
		);
		// Adicionar lista en $data
		$data['datos']=$lista;
		// Llamar a la vista
		return view('persona/datos2', $data);
	}
}