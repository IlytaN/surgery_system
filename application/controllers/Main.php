<?php
Class Main extends CI_Controller {

	public function index(){
		$data['date']=date("Y.m.d");
		$data['page']='main/index';
		$this->load->view('menu/content',$data);
	}
}
