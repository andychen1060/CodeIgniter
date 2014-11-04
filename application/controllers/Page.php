<?php
class Page extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');  //載入Form輔助函數
		$this->load->library('parser');		
	}
	
	/**
	index method
	*/
	public function index()
	{		
		$data = array(
            'name' => 123,
			'title' => '產學研後臺管理首頁'
        );	
		
		$this->parser->parse('show_template', $data);
	}
}