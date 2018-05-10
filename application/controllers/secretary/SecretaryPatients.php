<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class SecretaryPatients extends CI_Controller

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
        $this->load->model('Slot_model');

    }


    public function index()
    {

        $this->patients();

    }

    public function patients()
    {
        // create the data object
        $this->load->model("Slot_Model");
        $patients = $this->Slot_Model->getPatients();

        $data['patients'] = $patients;

        $this->load->view('menu/header');
        $this->load->view('secretary/secretary');
        $this->load->view('secretary/patients', $data);
        $this->load->view('menu/footer');
    }

    // get patient records
//    public function show_patient_details($p_id)
//    {
//        $this->load->model('Patients_model');
//        // create the data object
//        $data['details'] = $this->Patients_model->getPatientDetails($p_id);
//        $this->load->view('menu/header');
//        $this->load->view('secretary/secretary');
//        $this->load->view('secretary/patients', $data);
//        $this->load->view('menu/footer');
//    }

    // add a medical history
    public function add_medical_history()
    {
        $this->load->model('Patients_model');
        $insert_data = array(
            'MedHisId' => "",
            'PatId' => $this->input->post('PatId'),
            'Allergies' => $this->input->post('Allergies'),
            'Cancer' => $this->input->post('Cancer'),
            'Depression' => $this->input->post('Depression'),
            'Epilepsy' => $this->input->post('Epilepsi'),
            'Heart_disease' => $this->input->post('Heart_disease'),
            'Liver_disease' => $this->input->post('Liver_disease'),
            'Diabetes' => $this->input->post('Diabetes'),
            'High_blood_pressure' => $this->input->post('High_blood_pressure'),
            'other_problems' => $this->input->post('other_problems'));
        $this->Patients_model->addMedicalHistory($insert_data);

        return true;
    }

    // add a new patient
    public function add_patient()
    {
        // Need fix
        $this->load->model('Patients_model');
        $insert_data = array(
            'PatId' => "",
            'PatName' => $this->input->post('PatName'),
            'PatBirthDate' => $this->input->post('PatBirthDate'),
            'PatGender' => $this->input->post('PatGender'),
            'PatAddress' => $this->input->post('PatAddress'));
        $this->Patients_model->addPatient($insert_data);
    }

    // update database when user clicks "save"
    public function update_patient()
    {
        $this->load->model('Patients_model');

        $PatId = $this->input->post('PatId');
        $PatName = $this->input->post('PatName');
        $PatBirthDate = $this->input->post('PatBirthDate');
        $PatGender = $this->input->post('PatGender');
        $PatAddress = $this->input->post('PatAddress');

        $update_data = array(
            "PatName" => $PatName,
            "PatBirthDate" => $PatBirthDate,
            "PatGender" => $PatGender,
            "PatAddress" => $PatAddress);
        $this->Patients_model->updatePatient($update_data, $PatId);
    }

    // delete a patient
    public function delete_patient()
    {
        $this->load->model('Patients_model');
        $p_id = $this->input->post('PatId');
        $this->Patients_model->deletePatient($p_id);
    }
}
