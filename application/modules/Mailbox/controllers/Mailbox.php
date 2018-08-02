<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailbox extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['page_title'] = 'Mailbox';
		$data['page_content'] = 'Mailbox/mailbox';
		$this->template->layout($data);
	}
    
	public function compose(){
		$data['page_title'] = 'Compose';
		$data['page_content'] = 'Mailbox/compose_mail';
		$this->template->layout($data);
	}

	public function read(){
		$data['page_title'] = 'Compose';
		$data['page_content'] = 'Mailbox/read_mail';
		$this->template->layout($data);
	}
}
