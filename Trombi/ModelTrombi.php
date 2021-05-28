<?php
class ModelTrombi{
    public function __construct()
    {

    }
    
    public function getDataTrombi(){
        $url = "Trombi/json/TrombiJson.json";
        $json = file_get_contents($url);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);
        return $data;
    }
}