<?php

class CtrlBalade{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewBalade();
        $this->model = new ModelBalade();
    }
    public function getBalade(){
        $data = $this->model->getDataBalade();
        $this->view->afficherBalade($data);
    }
}