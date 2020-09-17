<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		echo "1111111111111"."</br>";
	}
	public function index()
	{

		$data['data'] = array("000000000","hello world","11","111","1111");
		$this->load->view("Hello_view",$data);
		
	}
	public function show($name,$last)
	{
		echo "Hello ".$name. " " .$last;
		$this->_keepout();
	}
	public function _keepout()
	{
		echo "</br>"."'111111111111111'";
	}
}
