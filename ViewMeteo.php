<?php

class ViewMeteo {

    public function __construct(){

    }

    public function afficherPage($page) {
        $page .= ".html";
        include "template/template.html";
    }

    public function afficherMeteo($data)
    {
        $page = "meteo.html";
        include "template/template.html";
    }
    
}