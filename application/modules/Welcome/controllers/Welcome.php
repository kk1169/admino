<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['page_title'] = 'Welcome';
		$data['page_content'] = 'Welcome/welcome';
		$this->template->layout($data);
	}
}
