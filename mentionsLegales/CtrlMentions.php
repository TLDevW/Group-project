<?php

class CtrlMentions
{

    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewMentions();
        $this->model = new ModelMentions();
    }



    public function getMentions()
    {
        $data = $this->model->getDataMentions();
        $this->view->afficherMentions($data);
    }
}