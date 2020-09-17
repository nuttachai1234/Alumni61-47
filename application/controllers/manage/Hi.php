<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hi extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		echo "hello world"."</br>";
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function show($name,$last)
	{
		echo "hello world ".$name. " " .$last;
		$this->_keepout();
	}
	public function _keepout()
	{
		echo "</br>"." This is Nowhere </br>";
		$this->load->view("Hello_view");
	}
}
