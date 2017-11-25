<?php

require APPPATH . 'libraries/REST_Controller.php';

class POI_Map extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_pois_map");
    }

    function index_get() {
        $data = $this->Modelo_pois_map->setPoisMap();
        if ($data) {
            $r["estado"] = "ok";
            $r["mensaje"] = $data;
            $this->response($r, 200);
        } else {
            $r["estado"] = "error";
            $r["mensaje"] = "No hay registros";
            $this->response($r, 200);
        }
    }

    public function index_post() {
        // $this->some_model->update_user( ... );
        $name = $this->input->post('titulo');
        $longitude = $this->input->post('cy');
        $latitude = $this->input->post('cx');
        $description = $this->input->post('titulo');
        $data = $this->Modelo_pois_map->insetPosMap($longitude, $latitude, $description, $name);

        // print_r($this->upload->data('file_name'));
        if ($data) {
            $r["estado"] = "ok";
            $r["mensaje"] = 'Grabado Correctamente';
        } else {
            $r["estado"] = "error";
            $r["mensaje"] = 'Error';
        }
        $this->set_response($r, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    function delete_post() {
        // $this->some_model->update_user( ... );
        $id = $this->input->post('id');


        $data = $this->Modelo_pois_map->DeletPosMap($id);

        $r["estado"] = "ok";
        $r["mensaje"] = 'Eliminado Correctamente';

        $this->set_response($r, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    function Update_post() {
        //print_r($_POST);
        $id = $this->input->post('id');
        $name = $this->input->post('titulo');
        $latitude = $this->input->post('cx');
        $longitude = $this->input->post('cy');


        $data = $this->Modelo_pois_map->UpdatetPosMap($id, $name, $latitude, $longitude);

        $r["estado"] = "ok";
        $r["mensaje"] = $name;

        $this->set_response($r, REST_Controller::HTTP_CREATED);
    }

    function idpoi_get() {
        $id = $this->get('id');
        $data['infopois'] = $this->Modelo_pois_map->IdPOIs($id);
        $data['imgPos'] = $this->Modelo_pois_map->IdPOIsImage($id);

        $this->response($data);
    }

    function data_get() {
        $data = $this->Modelo_pois_map->Ejemplo();
        $this->response($data);
    }

    function buscar_post() {
        //print_r($_POST);
        
        $data = $this->Modelo_pois_map->buscar($_POST["palabra_buscar"]);
        $r["estado"] = "ok";
        $r["mensaje"] = $data;
        $this->response($r);
    }

}
