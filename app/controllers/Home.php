<?php
class Home extends Controller{
    public function __construct(){
        if(!isLoggedIn()){
redirect('authentication/login');
        }

    }
    
    public function index(){
        $this->view('dashboard/index');
    }
    public function post(){
        $this->view('dashboard/users');
    }
    public function postsedite($id){
        $data['Postid'] = $id;
        $this->view('dashboard/products',$data);
    }
}