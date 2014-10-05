<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
	    
    public function teste()
    {
        $this->load->view('app/teste');
    }
    
    public function main(){
        $this->load->view('app/main');
    }
	public function index()
	{
		$this->load->view('app/login_signup');
	}
}