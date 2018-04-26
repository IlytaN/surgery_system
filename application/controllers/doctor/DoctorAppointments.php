<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class DoctorAppointments extends CI_Controller

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
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//        $this->load->model('User_model');

    }


    public function index()
    {

        $this->appointments();

    }

    public function appointments(){


        // create the data object
        $data = new stdClass();

        $this->load->view('header');
        $this->load->view('doctor/doctor');
        $this->load->view('doctor/appointments');  // must contain table data
        $this->load->view('footer');
    }
}