<?php

class ModelTerrasse
{

    public function __construct()
    {
    }

    public function getDataTerrasse()
    {
        $url = "https://data.toulouse-metropole.fr/explore/dataset/terrasses-autorisees-ville-de-toulouse/download/?format=json&timezone=Europe/Berlin&lang=fr";
        $json = file_get_contents($url);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);
        return $data;
    }
}