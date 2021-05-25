<?php
class ModelCinema{
    public function __construct()
    {

    }
    
    public function getDataCinema(){
        $url = "https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=cinemas&q=";
        $json = file_get_contents($url);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);
        return $data;
    }
}