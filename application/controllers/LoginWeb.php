<?php

class LoginWeb extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("Modelo_Usuarios");
    }

    function index() {
        switch ($this->session->userdata('perfil')) {
            case '':
                $data['contenido'] = "login/index";
                $this->load->view('welcome_message', $data);
                break;
            case 'Admin':
                redirect(base_url() . 'Home');
                break;
            case 'Desarrollador':
                redirect(base_url() . 'Home');
                break;

            default:
                break;
        }
    }

    function login() {


        $dato = $this->input->post();
        //print_r($dato);
        if (isset($dato)) {
            $Usuario = $this->input->post("username");
            $password = $this->input->post("password");
            //echo sha1($password);
            // exit();
            $check_user = $this->Modelo_Usuarios->setLogin($Usuario, $password);
            //echo json_encode($data, JSON_FORCE_OBJECT);

            if ($check_user == TRUE) {
                $data = array("is_logued_in" => TRUE,
                    "id_usuario" => $check_user->idUsuarios,
                    "perfil" => $check_user->Tipo_Usuarios,
                    "username" => $check_user->Nombre_Usuarios,
                    "cod_Usuarios" => $check_user->cod_Usuarios
                );
                $this->session->set_userdata($data);
                //$this->index();
                //echo json_encode($data);
                //$nonsequential = array(1=>"foo", 2=>"bar", 3=>"baz", 4=>"blong");
                //header('Content-Type: application/json');
                echo json_encode($data, JSON_FORCE_OBJECT);
            } else {
                $datos = "as";
                echo json_encode($dato, JSON_FORCE_OBJECT);
            }
        } else {
            $datos = "as";
            echo json_encode($dato, JSON_FORCE_OBJECT);
        }
    }

    public function logout_ci() {
        $this->session->sess_destroy();
        $this->index();
    }

    function img() {
        //print_r();
        $config = array();
        $config["upload_path"] = "./assets/";
        $config["allowed_types"] = "gif|jpg|jpeg|png";
        $config["max_size"] = "2000";
        $config["remove_spaces"] = TRUE;
//        print_r($config);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('portrait')) {
            $errors = array('error' => $this->upload->display_errors());
            die(json_encode($errors));
        } else {
            $data = array('upload_data' => $this->upload->data());
            die(json_encode(array('file' => $data['upload_data']['file_name'])));
        }
    }

}
