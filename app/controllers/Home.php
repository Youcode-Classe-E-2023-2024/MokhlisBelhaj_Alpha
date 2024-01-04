<?php
class Home extends Controller{
    public function __construct(){

    }
    
    public function index(){
        $this->view('dashboard/index');
    }
    public function users(){
        $this->view('dashboard/users');
    }
    public function products(){
        $this->view('dashboard/products');
    }
}