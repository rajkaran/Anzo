<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
   public function __construct(){
		parent::__construct();
		$this->load->helper('url');
   }
	 
	public function index(){
		//redirecting to the front end 'anzo Home page'
		redirect("anzo/home");
		//echo "raj";
	}
	
}
