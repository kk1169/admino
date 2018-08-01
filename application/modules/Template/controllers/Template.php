<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function layout($data = NULL){

        $this->load->view('template',$data);

    }

}


?>