<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foods extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
    
    	$this->load->view('foods/index');
    }
}