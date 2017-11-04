<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class POI extends REST_Controller {

    function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model("Modelo_pois");
    }

    function index_get() {
        $data= $this->Modelo_pois->setPois();
        if ($data) {
            $this->response($data, 200);
        } else {
            $this->response(NULL, 404);
        }
    }

   
}
