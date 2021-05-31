<?php
class ViewCyclo{
    public function __construct(){

    }

    public function afficherListeCyclo($data){
        $page = "Cyclo/template/CycloListe.html";
        include "template/template.html";
    }
    public function afficherCarteCyclo($data){
        $page = "Cyclo/template/CarteCyclo.html";
        include "template/template.html";
    }
    public function afficherCarteCycloBis($a,$b){
        $page = "Cyclo/template/CarteCycloBis.html";
        include "template/template.html";
        
    }
}

