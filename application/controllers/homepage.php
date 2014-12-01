<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Homepage extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Onehalf Payroll System";
		
		$this->load->view('templates/header', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/footer', $data);
	}
	
}

?>