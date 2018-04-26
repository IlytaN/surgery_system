<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class DoctorPatients extends CI_Controller

{
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */

    // Each Controller requires a construct to load dependencies
    public function __construct()
    {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
    }


    public function index()
    {

        $this->patients();

    }

    public function patients(){


        // create the data object
        $data = new stdClass();

        $this->load->view('header');
        $this->load->view('doctor/doctor');
        $this->load->view('doctor/patients');  // contains table data
        $this->load->view('footer');
    }
}