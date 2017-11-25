<?php

class Edicion extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_pois_map");
    }

    function index() {
        if ($this->session->userdata('perfil') != FALSE) {
            $data['contenido'] = "Home/edicion";
            $data['username'] = $this->session->userdata('username');
            $data['cod_Usuarios'] = $this->session->userdata('cod_Usuarios');
            $data['puntos'] = $this->Modelo_pois_map->setPoisMap();
            $this->load->view("Vista_General", $data);
        } else {
            redirect(base_url(''));
        }
    }

    function do_upload() {
        //print_r($_POST);

        //print_r();
        $config = array();
        $config["upload_path"] = "./assets/img/User";
        $config["allowed_types"] = "gif|jpg|jpeg|png";
        $config["max_size"] = "2000";
        $config["file_name"] = sha1($this->input->post('id'));

        $config["remove_spaces"] = TRUE;
//        print_r($config);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload()) {
//            $errors = array('error' => $this->upload->display_errors());
//            die(json_encode($errors));
            $id = $this->input->post('id');
            $direccion = $this->input->post('direccion');
            $telefono = $this->input->post('telefono');
            $descripcion = $this->input->post('descripcion');
            $mision = $this->input->post('mision');
            $vision = $this->input->post('vision');
            $subir = $this->Modelo_pois_map->UpdatetPosMapImg2($id, $direccion, $telefono, $descripcion, $mision, $vision);
                        redirect("Edicion");

        } else {
            $file_info = $this->upload->data();


            $data = array('upload_data' => $this->upload->data());
            $id = $this->input->post('id');
            $direccion = $this->input->post('direccion');
            $telefono = $this->input->post('telefono');
            $descripcion = $this->input->post('descripcion');
            $mision = $this->input->post('mision');
            $vision = $this->input->post('vision');
            $imagen = $file_info['file_name'];
            $subir = $this->Modelo_pois_map->UpdatetPosMapImg($id, $imagen, $direccion, $telefono, $descripcion, $mision, $vision);
            //$data['titulo'] = $titulo;
            //$data['imagen'] = $imagen;
            //$data = array('upload_data' => $this->upload->data());
            // die(json_encode(array('file' => $data['upload_data']['file_name'])));
            redirect("Edicion");
        }
    }

}
