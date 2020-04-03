<?php



class Home extends CI_Controller{
    public function index(){
  
        $this->load->view('user/cart');
	}
	function cekout()
{
	$this->load->view('user/cekout');
}
}
