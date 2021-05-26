<?php
class ViewCafeConcert{
    public function __construct(){

    }

    public function afficherListeCafeConcert($data){
        $page = "CafeConcert/template/CafeConcert.html";
        include "template/template.html";
    }
    public function afficherCarteCafeConcert($data){
        $page = "CafeConcert/template/CarteConcert.html";
        include "template/template.html";
    }
}



