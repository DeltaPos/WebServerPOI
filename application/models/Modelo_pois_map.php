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
            'description_pois' => "",
            'name_pois' => $name
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
            'description_pois' => $name,
            'name_pois' => $name
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

    function UpdatetPosMapImg($id, $imagen,$direccion,$telefono,$descripcion,$mision,$vision) {

        $array = array(
            'id_pois' => $id,
            'imagen' => $imagen
        );
        $array1 = array(
            'dirreccion_pois' => $direccion,
            'telefono_pois' => $telefono,
            'description_pois' => $descripcion,
            'Mision_pois' => $mision,
            'vision_pois' => $vision
        );
        $this->db->where('id', $id);
        $this->db->update('pois', $array1);
        
        
        
        if ($this->db->insert('imagen', $array)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function UpdatetPosMapImg2($id,$direccion,$telefono,$descripcion,$mision,$vision) {

        
        $array1 = array(
            'dirreccion_pois' => $direccion,
            'telefono_pois' => $telefono,
            'description_pois' => $descripcion,
            'Mision_pois' => $mision,
            'vision_pois' => $vision
        );
        $this->db->where('id', $id);
        $this->db->update('pois', $array1);
        
        
     
    }

    public function Ejemplo() {

        $query = $this->db->query("SELECT 
    @rownum:=@rownum+1 as id,longitude,latitude,description_pois as description,name_pois as name,id_pois,imagen,GROUP_CONCAT(imagen)as imagen2, COUNT(imagen)as numimages 
    FROM pois,imagen ,(SELECT @rownum:=0) R     where pois.id=id_pois     GROUP BY pois.id
");
//        $query = $this->db->query("SELECT pois.id-1 as id,longitude,latitude,description,name,id_pois,imagen,GROUP_CONCAT(imagen)as imagen2, COUNT(imagen)as numimages FROM pois,imagen where pois.id=id_pois GROUP BY pois.id");
        return $query->result();
    }

    public function buscar($p) {
        
        $query = $this->db->query("select * from pois WHERE name_pois LIKE '%".$p."%'");
        return $query->result();
    }

}
