<?php 
include "mvc/models/Model.class.php";
class Controller {
    public $model;
    function __construct(){
        $this->model = new model();
    }
    
    public function index(){
        $data = $this->model->selectRestaurant();
        include 'mvc/views/home.php';
    }
}