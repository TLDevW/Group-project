<?php

class ViewMentions {

    public function __construct(){

    }

    

    public function afficherMentions($data)
    {
        $page = "mentionsLegales/template/mentions.html";
        include "template/template.html";
    }
    
}