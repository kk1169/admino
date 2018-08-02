<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDFGenerator
 *
 * @author KAMAL
 */


class PDFGenerator extends MY_Controller{
    
    public function index(){
        $this->load->view('pdf_generator');
    }
    
    public function pdf()
    {
        $this->load->library('pdf');
        $this->pdf->load_view('PDFGenerator/pdf_generator');
        $this->pdf->set_paper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream("document.pdf");
    }
}
