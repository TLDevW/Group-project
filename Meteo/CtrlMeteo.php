<?php
include_once "Meteo/ViewMeteo.php";
include_once "Meteo/ModelMeteo.php";

class CtrlMeteo
{

    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewMeteo();
        $this->model = new ModelMeteo();
    }

    

    public function getMeteo($ville)
    {
        $data = $this->model->getDataMeteo($ville);
        $this->view->afficherMeteo($data);
    }
}