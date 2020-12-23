<?php
class Controller{
    public $view;

    function __construct($view){
        $this->$view = $view;
    }

    public static function CreateView($view){
        require_once "./views/$view.php";
    }
}

?>