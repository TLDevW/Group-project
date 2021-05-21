<?php
include_once "CtrlMeteo.php";
if (isset($_GET['page'])){
    if ($_GET['page'] == "accueil"){
        $ctrl = new CtrlMeteo();
        $ctrl->getPage($_GET['page']);
    } else {

    }
} elseif (isset($_GET['ville'])){
    $ctrl = new CtrlMeteo();
    $ctrl->getMeteo($_GET['ville']);
} 
else{
    $ctrl = new CtrlMeteo();
    $ctrl->getPage("accueil");
}