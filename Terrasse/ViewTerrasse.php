<?php

class ViewTerrasse {

    public function __construct(){

    }

    

    public function afficherTerrasseCarte($data)
    {
        $page = "Terrasse/template/terrasseCarte.html";
        include "template/template.html";
    }
    public function afficherTerrasseListe($data)
    {
        $titre = "Liste des terrasses ouvertes";
        $page = "Terrasse/template/terrasseListe.html";
        include "template/template.html";
    }
    
}