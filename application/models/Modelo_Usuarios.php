<?php

class Modelo_Usuarios extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function setLogin($Usuario, $password) {


        $this->db->where('User_Usuarios', $Usuario);
        $this->db->where('Contra_Usuarios', sha1($password));
        $query = $this->db->get('usuarios');
        //echo $this->db->last_query();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            $this->session->set_flashdata('usuario_incorrecto', 'Los datos introducidos son incorrectos');
            redirect(base_url() . 'login', 'refresh');
        }
    }

}
