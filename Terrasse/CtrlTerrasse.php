<?php
include_once "Terrasse/ViewTerrasse.php";
include_once "Terrasse/ModelTerrasse.php";

class CtrlTerrasse
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewTerrasse();
        $this->model = new ModelTerrasse();
    }

    public function getTerrasse()
    {
        $data = $this->model->getDataTerrasse();
        $this->view->afficherTerrasse($data);
    }
}
