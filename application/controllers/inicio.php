<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index(){
		$this->load->view('inicio_sesion');
	}

	public function validar_usuario(){
		$cedula=$this->input->post("usuario");
		$clave=$this->input->post("clave");
		$this->load->model('usuarios'); 
		if($this->usuarios->validar_usuario($cedula,$clave)){
			if($this->usuarios->consultar_rol($cedula)=="administrador"){
				redirect('administrador');
			}else{
				redirect('docente');
			}
		}else{
			$this->load->view('mensaje');
		}
	}
}