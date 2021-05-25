<?php
class ViewPage{
    public function __construct()
    {
        
    }
    public function afficherPage($page) {
        $page = "Page/template/{$page}.html";
        include "template/template.html";
    }
}