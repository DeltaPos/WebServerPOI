<?php

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_Usuarios");
    }

    function index() {

        //&& $this->session->userdata('perfil') == 'Admin' || $this->session->userdata('perfil') == 'Desarrollador' 
        if ($this->session->userdata('perfil') != FALSE) {
            $data['contenido'] = "User/index";
            $data['username'] = $this->session->userdata('username');
            $data['cod_Usuarios'] = $this->session->userdata('cod_Usuarios');
            $data['DataUsuario']=$this->Modelo_Usuarios->setDatosUser($this->session->userdata('cod_Usuarios'));
            $this->load->view('vista_General', $data);
        } else {
            redirect(base_url(''));
        }
    }

    function setDatosUser() {
        
    }

}
