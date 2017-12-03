<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuarios extends CI_Model {
	
	function validar_usuario($cedula,$clave){
		$this->db->where('cedula',$cedula);
		$this->db->where('clave',$clave);
		$res = $this->db->get('usuarios');
		if ($res->num_rows()==0){
			return FALSE;
		}
		else{
			$res = $res->row();
			echo $res->clave;
			$this->session->set_userdata('usuario',$res->nombre);
			$this->session->set_userdata('clave',$res->clave);
			$this->session->set_userdata('cedula',$res->cedula);
			return TRUE;
		}
	}	


	function consultar_rol($cedula){
		$res = $this->db->select('*')->from('usuarios')->join('roles','usuarios.codigo_rol_roles=roles.codigo_rol')->where('cedula='.$cedula)->get();
		$res = $res->row();
		$this->session->set_userdata('rol',$res->tipo_rol);
		return strtolower($res->tipo_rol);
	}
}
