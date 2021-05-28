<?php

class ModelMeteo
{

    public function __construct()
    {
    }

    public function getDataMeteo($ville)
    {
        $url = "https://www.prevision-meteo.ch/services/json/";
        $json = file_get_contents($url . $ville);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);
        $_SESSION['meteo'] = $data;
        return $data;
    }
}
