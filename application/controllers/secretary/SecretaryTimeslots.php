<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class SecretaryTimeslots extends CI_Controller
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
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Slot_model');
    }
    public function index()
    {
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->model("Slot_Model");
		$data['appointments'] = $this->Slot_Model->getAppointments();
		
        $this->load->view('header');
        $this->load->view('secretary/secretary');
        $this->load->view('secretary/timeslots', $data);
        $this->load->view('footer');
    }
}