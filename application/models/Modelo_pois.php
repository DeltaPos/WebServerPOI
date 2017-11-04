<?php

/**
 * 
 */
class Modelo_pois extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function setPois() {

        $query = $this->db->query("SELECT * FROM pois");
        return $query->result();
    }

}
?> 
