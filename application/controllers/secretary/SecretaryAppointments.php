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
		
        $this->load->view('header');
        $this->load->view('secretary/secretary');
        $this->load->view('secretary/appointments', $data);
        $this->load->view('footer');
    }
	
    public function newappointment()
    {
		echo"Entered newappointment";
        // CK handles all the backend for creating an appointment - dummy so that the AJAX request can be made in teh JS
       /* TC https://stackoverflow.com/questions/35475856/passing-data-from-view-to-controller-codeigniter
		where i learned how to pass variables using a url
		*/
		
		/*
		echo "ASFHDGJFHKEJRYK";
		$Patientname = $this->uri->segment(3);
		$Doctorname = $this->uri->segment(4);
		$Starttime = $this->uri->segment(5);
		$Finishtime = $this->uri->segment(6);
		$Date = $this->uri->segment(7);
		$Cost = $this->uri->segment(8);
		*/
		
		$this->load->helper("form");
		$this->load->helper("url");

		$Patientname = $this->input->post('patientNameNewAppointment');
		$Doctorname = $this->input->post('doctorNameNewAppointment');
		$Starttime = $this->input->post('startlotNewAppointment');
		$Finishtime = $this->input->post('finishSelectNewAppointment');
		$Date = $this->input->post('Date');
		$Cost = $this->input->post('Cost');
		
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->model("Slot_Model");
		$this->Slot_Model->enter_appointment($Patientname, $Doctorname, $Starttime, $Finishtime, $Date, $Cost);
    }
	
	public function deleteappointment()
    {
		echo"Entered newappointment";
		$this->load->helper("form");
		$this->load->helper("url");

		$Patientname = $this->input->post('patientNameNewAppointment');
		$Starttime = $this->input->post('startlotNewAppointment');
		$Date = $this->input->post('Date');
	    
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->model("Slot_Model");
		$this->Slot_Model->delete_appointment($Patientname, $Starttime, $Date);
    }
	
	public function updateappointment()
    {
		echo"Entered newappointment";
		$this->load->helper("form");
		$this->load->helper("url");

		$Patientname = $this->input->post('patientNameNewAppointment');
		$Starttime = $this->input->post('startlotNewAppointment');
		$Date = $this->input->post('Date');
		$Doctorname = $this->input->post('doctorNameNewAppointment');
		$newStarttime = $this->input->post('newstartlotNewAppointment');
		$Finishtime = $this->input->post('newfinishSelectNewAppointment');
		$newDate = $this->input->post('newDate');
	    
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->model("Slot_Model");
		$this->Slot_Model->update_appointment($Patientname, $Starttime, $Date, $Doctorname, $newStarttime, $Finishtime, $newDate);
    }
	
	public function payment()
    {
		echo"Entered payment";
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