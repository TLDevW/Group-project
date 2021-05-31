<?php
include_once "Cyclo/ViewCyclo.php";
include_once "Cyclo/ModelCyclo.php";

class CtrlCyclo 
{
    private $view;
    private $model;

    public function __construct(){

        $this->view = new ViewCyclo();
        $this->model = new ModelCyclo();
    }
    public function getListeCyclo(){
        $data = $this->model->getDataCyclo();
        $this->view->afficherListeCyclo($data);
    }
    public function getCarteCyclo(){
        $data = $this->model->getDataCyclo();
        $this->view->afficherCarteCyclo($data);
    }
    
    public function getCarte($a,$b){
        $this->view->afficherCarteCycloBis($a,$b);
        
    }
    
}