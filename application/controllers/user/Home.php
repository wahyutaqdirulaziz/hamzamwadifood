<?php



class Home extends CI_Controller{
    public function index(){
		$this->load->view('user/template/home');
        
	}
	
	function cekout()
{
	$this->load->view('user/cekout');
}
function cart(){
	$this->load->view('user/cart');
}
}
