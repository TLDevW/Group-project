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
}
