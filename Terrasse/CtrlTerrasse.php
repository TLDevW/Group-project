<?php
include_once "Terrasse/ViewTerrasse.php";
include_once "Terrasse/ModelTerrasse.php";

class CtrlTerrasse
{
    private $view;
    private $model;

    public function __construct(){
        $this->model = new ModelTerrasse();
        $this->view = new ViewTerrasse();
    }
    

    public function getTerrasseListe()
    {
        $data = $this->model->getDataTerrasse();
        $this->view->afficherTerrasseListe($data);
    }

    public function getTerrasseCarte()
    {
        $data = $this->model->getDataTerrasse();
        $this->view->afficherTerrasseCarte($data);
    }
}
