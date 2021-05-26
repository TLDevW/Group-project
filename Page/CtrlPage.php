<?php
class CtrlPage{
    private $view;
    public function __construct()
    {
        $this->view = new ViewPage();
    }
    public function getPage($page="accueil")
    {
        $this->view->afficherPage($page);
    }
}
?>