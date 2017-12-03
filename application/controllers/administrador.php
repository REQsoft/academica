<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function salida_informacion($output = null)
	{
		$this->load->view('menu_administrador');
		$this->load->view('salida_informacion',(array)$output);
	}

	public function index()
	{
		$this->salida_informacion((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function usuarios(){
		if (!$this->session->userdata('cedula')) redirect('inicio');
		$crud = new grocery_CRUD();
		$crud->set_table('usuarios')
		->set_subject('usuarios')
		->columns('cedula','nombre','clave','codigo_rol_roles')
		->fields('cedula','nombre','clave','codigo_rol_roles')

		->display_as('cedula','Cedula')
		->display_as('nombre','Nombre')
		->display_as('clave','Contraseña')
		->display_as('codigo_rol_roles','Tipo de cuenta')

		->set_relation('codigo_rol_roles','roles','tipo_rol')

		->required_fields('cedula','nombre','clave','codigo_rol_roles')

		->set_rules('cedula','Cedula','Integer');
		
		$output = $crud->render();
		$this->salida_informacion($output);
	}

	public function eventos(){
		if (!$this->session->userdata('cedula')) redirect('inicio');
		$crud = new grocery_CRUD();
		$crud->set_table('eventos')
		->set_subject('evento')
		->columns('codigo_evento_tipo_evento','nombre_evento','lugar_evento','fecha_inicio','fecha_fin','valor_inscripcion')
		->fields('codigo_evento_tipo_evento','nombre_evento','lugar_evento','fecha_inicio','fecha_fin','valor_inscripcion')

		->display_as('codigo_evento_tipo_evento','Tipo de evento')
		->display_as('nombre_evento','Nombre')
		->display_as('lugar_evento','lugar')
		->display_as('fecha_inicio','Fecha de inicio')
		->display_as('fecha_fin','Fecha de finalizacion')
		->display_as('valor_inscripcion','Valor de inscripcion')


		->set_relation('codigo_evento_tipo_evento','tipos_eventos','tipo_evento')

		->required_fields('codigo_evento_tipo_evento','nombre_evento','lugar_evento','fecha_inicio','fecha_fin','valor_inscripcion')

		->set_rules('fecha_inicio','Fecha de inicio','Date')
		->set_rules('fecha_fin','fecha de finalizacion','Date')
		->set_rules('valor_inscripcion','Valor de inscripcion','Integer');
		
		$output = $crud->render();
		$this->salida_informacion($output);
	}

	public function cerrar(){
		$this->session->sess_destroy();
		redirect('inicio');
	}
}
