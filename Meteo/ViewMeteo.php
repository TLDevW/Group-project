<?php

class ViewMeteo {

    public function __construct(){

    }

    

    public function afficherMeteo($data)
    {
        $page = "Meteo/template/meteo.html";
        include "template/template.html";
    }

    public function afficherWidget($ville,$data){
        include "Meteo/template/widget.html";
    }
    
}