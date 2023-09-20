<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class of Printshop controller
 * 
 * @author Janne Pakaslahti, Jetro Tölli, Markus Ylisirniö, Samu Rintala, Mikael Leinonen
 */
class Printshop extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('printshop_model');
    }

    public function index() {
        //$this->printshop_model->get_prints();
        $data['title'] = 'A-print';
        $data['subtitle'] = 'Quality prints by A-holes';
        $this->load->view('templates/header',$data);
        $this->load->view('index',$data);
        $this->load->view('templates/footer');
    }
    
    public function tuotteet() {
        $data['title'] = 'Kaikki tuotteet';
        $this->load->view('templates/header',$data);
        $this->load->view('tuotteet');
        $this->load->view('templates/footer');
    }
    
    public function palaute() {
        $data['title'] = 'Palaute';
        $this->load->view('templates/header',$data);
        $this->load->view('feedback');
        $this->load->view('templates/footer');
    }
}