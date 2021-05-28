<?php
class ViewBalade
{
    public function __construct()
    {

    }

    public function afficherBalade($data){
        $page = "Balade/template/balade.html";
        include "template/template.html";
    }
    public function afficherBaladeCarte($data)
    {
        $page = "Balade/template/carteBalade.html";
        include "template/template.html";
    }
}