<?php
session_start();
include_once "autoload.php";

if (isset($_GET['page'])) {
    if ($_GET['page'] == "accueil") {
        $ctrl = new CtrlPage();
        $ctrl->getPage($_GET['page']);
    } else {
    }
} elseif (isset($_GET['ville'])) {
    $ctrl = new CtrlMeteo();
    $ctrl->getMeteo($_GET['ville']);
} elseif (isset($_GET['cinema'])) {
    $ctrl = new CtrlCinema();
    $ctrl->getListeCinema();
} elseif (isset($_GET['widget'])) {
    $ctrl = new CtrlMeteo();
    $ctrl->widgetMeteo();
} else {
    $ctrl = new CtrlPage();
    $ctrl->getPage("accueil");
}
