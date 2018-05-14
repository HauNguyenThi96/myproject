<?php
/**
  * 
  */
 class User_model extends CI_Model 
 {
 	
 	function getList()
 	{
 		$data=[
				['id'=>1,
				'email'=>'admin@gmail.com',
				'pass'=>123456],
				['id'=>2,
				'email'=>'member@gmail.com',
				'pass'=>123],
		];

		return $data;
 	}
 } 
 ?>