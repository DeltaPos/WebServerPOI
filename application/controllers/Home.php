<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Modelo_Admin');
    }

    function index() {
        if ($this->session->userdata('perfil') != FALSE ) {
            $data['contenido'] = "Home/index";
            $data['username']= $this->session->userdata('username');
            $data['cod_Usuarios']= $this->session->userdata('cod_Usuarios');
            $this->load->view("Vista_General", $data);
        } else {
            redirect(base_url(''));
        }
    }

}
