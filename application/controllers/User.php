<?php

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['contenido'] = "User/index";
        $this->load->view('welcome_message', $data);
    }

}
