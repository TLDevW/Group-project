<?php 
class ModelCyclo{
    public function __construct(){

    }
    public function getDataCyclo(){
        $url = "https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=station-velo-toulouse&q=&rows=284";
        $json = file_get_contents($url);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);
        return $data;
    }
}
