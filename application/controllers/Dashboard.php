<?php



class Dashboard extends CI_Controller{
    public function index(){
  
        $this->load->view('user/template/home');
    }
}
