<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FrontWeb extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
$this->load->library('session');
        // $this->load->library('encrypt');
        // for form validation
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    // Login for Admissions
    public function index()
    {
        $this->load->view("FrontWeb/index");

    }


    /******************** End FrontWeb moudule *********************/


}
