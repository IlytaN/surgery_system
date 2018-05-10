<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class SecretaryAppointments extends CI_Controller
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
        $this->appointments();
    }

    public function appointments()
    {
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->model("Slot_Model");
        $data['patients'] = $this->Slot_Model->getPatients();
        $data['doctors'] = $this->Slot_Model->getDoctors();
        $data['appointments'] = $this->Slot_Model->getAppointments();

        $this->load->view('menu/header');
        $this->load->view('secretary/secretary');
        $this->load->view('secretary/appointments', $data);
        $this->load->view('menu/footer');
    }

    public function newappointment()
    {
        // CK handles all the backend for creating an appointment - dummy so that the AJAX request can be made in teh JS
        /* TC https://stackoverflow.com/questions/35475856/passing-data-from-view-to-controller-codeigniter
         where i learned how to pass variables using a url
         */
        $this->load->helper("form");
        $this->load->helper("url");

        $Patientname = $this->input->post('patientNameNewAppointment');
        $Doctorname = $this->input->post('doctorNameNewAppointment');
        $Starttime = $this->input->post('startlotNewAppointment');
        $Finishtime = $this->input->post('finishSelectNewAppointment');
        $Date = $this->input->post('date');
        $Cost = 60;//$this->input->post('Cost');

        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->model("Slot_Model");
        $this->Slot_Model->enter_appointment($Patientname, $Doctorname, $Starttime, $Finishtime, $Date, $Cost);


        // returns the success or failure.
        $return = $this->Slot_Model->enter_appointment($Patientname, $Doctorname, $Starttime, $Finishtime, $Date, $Cost);
        $this->output->set_content_type("application/json")->set_output(json_encode($return));
    }

    public function deleteappointment($Id)
    {
        $this->load->helper("form");
        $this->load->helper("url");

        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->model("Slot_Model");
        $return = $this->Slot_Model->delete_slot($Id);
        $this->output->set_content_type("application/json")->set_output(json_encode($return));
    }

    public function updateappointment()
    {
        $this->load->helper("form");
        $this->load->helper("url");


        $slotId = $this->input->post('slotId');
        $PatId = $this->input->post('patId');
        $newStarttime = $this->input->post('start_time');
        $newFinishtime = $this->input->post('end_time');
        $newDate = $this->input->post('date');
        //$newDate = date ("Y-m-d",$this->input->post('date'));
        $DocId = $this->input->post('docId');
        $cost = 60;


        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->model("Slot_Model");
        //$this->Slot_Model->update_appointment($Patientname, $Starttime, $Date, $Doctorname, $newStarttime, $Finishtime, $newDate);
        $return = $this->Slot_Model->update_slot($slotId, $DocId, $newDate, $newStarttime, $newFinishtime, $cost);
        $this->output->set_content_type("application/json")->set_output(json_encode($return));
    }

    public function payment()
    {
        $this->load->helper("form");
        $this->load->helper("url");

        $Patientname = $this->input->post('patientNamePayAppointment');
        $Starttime = $this->input->post('oldstartlotDelAppointment');
        $AppointmentDate = $this->input->post('ADate');
        $PaymentDate = $this->input->post('PDate');
        $PaymentType = $this->input->post('PayType');

        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->model("Slot_Model");
        $this->Slot_Model->addPayment($Patientname, $Starttime, $AppointmentDate, $PaymentDate, $PaymentType);
    }
}