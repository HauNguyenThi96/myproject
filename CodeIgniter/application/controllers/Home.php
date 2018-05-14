<?php
/**
 * 
 */
class Home extends CI_Controller
{
	
	function index($message="")
	{
		echo 'hau' .$message;
	}
	function load_form(){
		// $this->load->view('login');
		$this->load->view('templates/main');
	}
	// THỰC hiện truyền dữ liệu qua view
	function db_load(){
		$data['item']=[
				['id'=>1,
				'email'=>'admin@gmail.com',
				'pass'=>123456],
				['id'=>2,
				'email'=>'member@gmail.com',
				'pass'=>123],
		];

		$data['title']='Login';
		$this->load->view('login',$data);
	}
}