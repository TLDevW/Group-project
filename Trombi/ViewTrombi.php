<?php
class ViewTrombi
{
    public function __construct()
    {

    }

    public function afficherListeTrombi($data){
        $page = "Trombi/template/trombi.html";
        include "template/template.html";
    }
}
