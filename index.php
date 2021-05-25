<?php
include_once "Meteo/CtrlMeteo.php";
include_once "Cinema/CtrlCinema.php";
include_once "Page/CtrlPage.php";
if (isset($_GET['page'])){
    if ($_GET['page'] == "accueil"){
        $ctrl = new CtrlPage();
        $ctrl->getPage($_GET['page']);
    } else {

    }
} elseif (isset($_GET['ville'])){
    $ctrl = new CtrlMeteo();
    $ctrl->getMeteo($_GET['ville']);
} elseif (isset($_GET['cinema'])){
    $ctrl = new CtrlCinema();
    $ctrl->getListeCinema();
} 
else{
    $ctrl = new CtrlPage();
    $ctrl->getPage("accueil");
}