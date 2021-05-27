<?php

class ViewTerrasse {

    public function __construct(){

    }

    

    public function afficherTerrasse($data)
    {
        $page = "Terrasse/template/terrasse.html";
        include "template/template.html";
    }
    
}