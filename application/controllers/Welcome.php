<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		echo "The legend of tales"."</br>";
	}
	public function index()
	{
		//$data['name'] = "Kalum";
		//$data['email'] = "go.line334g@gmail.com";
		$data['player'] = array("000000000","Kalum","plee","sword master","lalabind");
		$this->load->view("Hello_view",$data);
		
	}
	public function show($name,$last)
	{
		echo "Hi ".$name. " " .$last;
		$this->_keepout();
	}
	public function _keepout()
	{
		echo "</br>"."'Nowhere'";
	}
}
