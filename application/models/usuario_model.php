<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Usuario_model extends CI_Model{

	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    	function get_usuarios()
	{
		//$this->db->select('id, nombre, apellido, username');

        $query = $this->db->get_where('usuarios', array('baja' => 'NO'));
		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
	}
	
	function add_user($data)
	{
		$this->db->insert('usuarios', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	

	function edit_usuario($id_usuario)
	{
		$query = $this->db->get_where('usuarios', array('id_usuario' => $id_usuario),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
	}
	
	function update_usuario($id_usuario, $data)
	{
		$this->db->where('id_usuario', $id_usuario);
        $query = $this->db->update('usuarios', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
	}

	function delete_usuario($id_usuario)
	{			
		$this->db->where('id', $id_usuario);
		$query = $this->db->delete('usuarios'); 
		return true;	
	}
	
	function not_active_usuarios()
    {
        $query = $this->db->get_where('usuarios', array('baja' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    function estado_usuario($id_usuario, $data){
        $this->db->where('id_usuario', $id_usuario);
        $query = $this->db->update('usuarios', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_consultas()
    {
        //$this->db->select('id, nombre, apellido, username');
        $query = $this->db->get('consulta');

        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }

    function add_consulta($data)
    {
        $this->db->insert('consulta', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    function delete_consulta($id)
    {           
        $this->db->where('id_consulta', $id);
        $query = $this->db->delete('consulta'); 
        return true;    
    }

 
} 