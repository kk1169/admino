<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['page_title'] = 'Blank';
		$data['page_content'] = 'Blank/blank';
		$this->template->layout($data);
	}
}
