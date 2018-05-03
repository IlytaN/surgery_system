<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User class.
 *
 * @extends CI_Controller
 */
class DoctorVisits extends CI_Controller
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
        $this->visits();
    }
    public function visits()
    {
        // create the data object
        $data = new stdClass();
        $this->load->view('menu/header');
        $this->load->view('doctor/doctor');
        $this->load->view('doctor/visits');  // contains table data
        $this->load->view('menu/footer');
    }
}
