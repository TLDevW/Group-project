<?php

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
    public function getCarteCinema(){
        $data = $this->model->getDataCinema();
        $this->view->afficherCarteCinema($data);
    }
}