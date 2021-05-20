<?php
include_once "ViewMeteo.php";
include_once "ModelMeteo.php";

class CtrlMeteo
{

    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewMeteo();
        $this->model = new ModelMeteo();
    }

    public function getPage($page="accueil")
    {
        $this->view->afficherPage($page);
    }

    public function getMeteo($ville)
    {
        $data = $this->model->getDataMeteo($ville);
        $this->view->afficherMeteo($data);
    }
}