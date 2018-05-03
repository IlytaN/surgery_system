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
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->model('User_model');
    }
    public function index()
    {
        $this->patients();
    }
    public function patients(){
      $this->load->model('Patients_model');
        // create the data object
        // $data = new stdClass();
        $data['patients'] = $this->Patients_model->getPatientWithSummary();
        $this->load->view('menu/header');
        $this->load->view('doctor/doctor');
        $this->load->view('doctor/patients', $data);  // contains table data
        $this->load->view('menu/footer');
    }

    // get patient records
        public function show_patient_details($p_id){
          $this->load->model('Patients_model');
            // create the data object
            $data['details'] = $this->Patients_model->getPatientDetails($p_id);
            $this->load->view('menu/header');
            $this->load->view('secretary/secretary');
            $this->load->view('secretary/patients', $data);
            $this->load->view('menu/footer');
        }
}
