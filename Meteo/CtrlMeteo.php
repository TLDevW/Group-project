<?php

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

    public function widgetMeteo()
    {

        $heure = date('G') . "H00";
        if (!isset($_SESSION['meteo'])) {
            echo "";
        } else {
            $ville = $_SESSION['meteo']['city_info']['name'];
            $data = $_SESSION['meteo']['fcst_day_0']['hourly_data'][$heure];
            $this->view->afficherWidget($ville, $data);
        }
    }
}
