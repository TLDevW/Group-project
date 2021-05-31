<?php
class ViewCinema
{
    public function __construct()
    {

    }

    public function afficherListeCinema($data){
        $page = "Cinema/template/cinema.html";
        include "template/template.html";
    }
    public function afficherCarteCinema($data){
        $page = "Cinema/template/CarteCinema.html";
        include "template/template.html";
    }
}
