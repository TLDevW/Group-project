<?php
include_once "CafeConcert/ViewCafeConcert.php";
include_once "CafeConcert/ModelCafeConcert.php";

class CtrlCafeConcert 
{
    private $view;
    private $model;

    public function __construct(){

        $this->view = new ViewCafeConcert();
        $this->model = new ModelCafeConcert();
    }
    public function getListeCafeConcert(){
        $data = $this->model->getDataCafeConcert();
        $this->view->afficherListeCafeConcert($data);
    }
    public function getCarteCafeConcert(){
        $data = $this->model->getDataCafeConcert();
        $this->view->afficherCarteCafeConcert($data);
    }
}