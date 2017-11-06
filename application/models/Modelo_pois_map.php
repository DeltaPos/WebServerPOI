<?php

class Modelo_pois_map extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function setPoisMap() {
        $query = $this->db->query("SELECT * FROM pois");
        return $query->result();
    }

    function insetPosMap($longitude, $latitude, $description, $name) {
        $array = array(
            'longitude' => $longitude,
            'latitude' => $latitude,
            'description' => $description,
            'name' => $name
        );
        if ($this->db->insert('pois', $array)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function DeletPosMap($id) {
        $this->db->where('id', $id);
        $this->db->delete('pois');
    }

    function UpdatetPosMap($id, $name, $latitude, $longitude) {
        $array2 = array(
            'longitude' => $longitude,
            'latitude' => $latitude,
            'description' => $name,
            'name' => $name
                //'img'=>,
                //'otro_datos'=>
        );

        $this->db->where('id', $id);
        $this->db->update('pois', $array2);
        //print_r($this->db->last_query());
    }

    function IdPOIs($id) {
        $query = $this->db->query("SELECT * FROM pois where id=" . $id);
        //print_r($this->db->last_query());

        return $query->result();
    }

    function IdPOIsImage($id) {
        $query = $this->db->query("SELECT * FROM imagen where id_pois=" . $id);
        //print_r($this->db->last_query());

        return $query->result();
    }

    function UpdatetPosMapImg($id, $imagen) {

        $array = array(
            'id_pois' => $id,
            'imagen' => $imagen
        );
        if ($this->db->insert('imagen', $array)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function Ejemplo() {

        $query = $this->db->query("SELECT pois.id-1 as id,longitude,latitude,description,name,id_pois,imagen,GROUP_CONCAT(imagen)as imagen2, COUNT(imagen)as numimages FROM pois,imagen where pois.id=id_pois GROUP BY pois.id");
        return $query->result();
    }

}
