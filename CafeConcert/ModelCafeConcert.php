<?php 
class ModelCafeConcert{
    public function __construct(){

    }
    public function getDataCafeConcert(){
        $url = "https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=cafes-concerts&q=&rows=26";
        $json = file_get_contents($url);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);
        return $data;
    }
}