<?php
include_once "Cinema/ViewCinema.php";
include_once "Cinema/ModelCinema.php";

class CtrlCinema{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewCinema();
        $this->model = new ModelCinema();
    }
    public function getListeCinema(){
        $data = $this->model->getDataCinema();
        $this->view->afficherListeCinema($data);
    }
}