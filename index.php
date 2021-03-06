<?php
session_start();
date_default_timezone_set("Europe/Paris");
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
} elseif (isset($_GET['cinema-liste'])) {
    $ctrl = new CtrlCinema();
    $ctrl->getListeCinema();
}elseif (isset($_GET['cinema-carte'])) {
    $ctrl = new CtrlCinema();
    $ctrl->getCarteCinema();
} elseif (isset($_GET['widget'])) {
    $ctrl = new CtrlMeteo();
    $ctrl->widgetMeteo();
} elseif (isset($_GET['terrasse-carte'])) {
    $ctrl = new CtrlTerrasse();
    $ctrl->getTerrasseCarte();
} elseif (isset($_GET['terrasse-liste'])) {
    $ctrl = new CtrlTerrasse();
    $ctrl->getTerrasseListe();
} elseif (isset($_GET['cafeconcert-liste'])) {
    $ctrl = new CtrlCafeConcert();
    $ctrl->getListeCafeConcert();
} elseif (isset($_GET['cafeconcert-carte'])) {
    $ctrl = new CtrlCafeConcert();
    $ctrl->getCarteCafeConcert();
} elseif (isset($_GET['selectdepartement'])) {
    $ctrl = new CtrlFestivals();
    $ctrl->getPage('selectdepartement');
} elseif (!isset($_GET['departement']) == "") {
    $ctrl = new CtrlFestivals();
    $ctrl->getListeFestivals($_GET['departement']);
} elseif (isset($_GET['balade'])) {
    $ctrl = new CtrlBalade();
    $ctrl->getBalade();
} elseif (isset($_GET['balade-carte'])) {
    $ctrl = new CtrlBalade();
    $ctrl->getBaladeCarte();
} elseif (isset($_GET['cyclo-carte'])) {
    $ctrl = new CtrlCyclo();
    $ctrl->getCarteCyclo();

} elseif  (isset ($_GET['cyclo']))  {
    $ctrl = new CtrlCyclo();
    $ctrl ->getCarte($_GET['CoorX'],$_GET['CoorY']);

} elseif (isset($_GET['cyclo-liste'])) {
    $ctrl = new CtrlCyclo();
    $ctrl->getListeCyclo();
} elseif (isset($_GET['trombi'])) {
    $ctrl = new CtrlTrombi();
    $ctrl->getListeTrombi();
} 
elseif (isset($_GET['mentions'])) {
    $ctrl = new CtrlMentions();
    $ctrl->getMentions("mentions");
}else {
    $ctrl = new CtrlPage();
    $ctrl->getPage("accueil");
} 
