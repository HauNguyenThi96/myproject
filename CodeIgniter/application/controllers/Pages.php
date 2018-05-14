<?php 
// bảo vệ file 
//if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	 public function index() {

        // load model
        $this->load->model('User_model');
        // load hàm trong model
         $news_list['data']= $this->User_model->getList();
        
         $data['title']='Login';
		$this->load->view('login',$news_list);
    }
}