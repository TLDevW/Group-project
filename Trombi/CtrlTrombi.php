<?php
include_once "Trombi/ViewTrombi.php";
include_once "Trombi/ModelTrombi.php";

class CtrlTrombi{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewTrombi();
        $this->model = new ModelTrombi();
    }
    public function getListeTrombi(){
        $data = $this->model->getDataTrombi();
        $this->view->afficherListeTrombi($data);
    }
}