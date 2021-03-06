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
        $this->load->model('User_model');
        $this->load->model("Slot_Model");

    }

    public function index()
    {
        //$data['slotInfo'] = $this->Slot_Model->return_slot();  // CK - No db migrations??
        $this->load->view('menu/header');
        $this->load->view('secretary/secretary');
        //$this->load->view('secretary/timeslots', $data);
        $this->load->view('secretary/timeslots');
        $this->load->view('menu/footer');
    }

    //Used to search for a slot by entering a day
    public function searchDate()
    {
        echo "entered searchDate()";
        $submitData = $this->input->post("input_add");

        //Used to check if the submit button works
        if ($submitData == false) {
            return;
        }

        //This gets the variable that was typed into the search box
        $date_entered = $this->input->post("date_entered");
        echo $date_entered;
        $data['slotInfo'] = $date_entered;
        $this->load->model("Slot_Model");
        echo "back in searchDate";
        //This array holds the result of the query
        $data['slotInfo'] = $this->Slot_Model->return_slot($date_entered);
        $this->load->view('Slot_View2', $data);
    }

    //Used to display Search patient
    public function displaysearchPatient()
    {
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->view('Search_patient');
    }

    /*
    //Function used to search for patients name that was entered
    public function searchPatient(){
      echo "entered searchPatient()";
      $this->load->helper("form");
      $this->load->helper("url");
      $submitData = $this->input->post("input_add");

      //Used to check if the submit button works
      if($submitData == false){
        return;
      }

      //This gets the variable that was typed into the search box
      $patient_entered = $this->input->post("patient_entered");
      echo $patient_entered;
      $data['slotInfo'] = $patient_entered;
      $this->load->model("Slot_Model");
      echo "back in searchPatient";
      //This array holds the result of the query
      $data['slotInfo'] = $this->Slot_Model-> return_patient($patient_entered);
      $this->load->view('Search_patient', $data);
    }
    */

    public function displayenterSlot()
    {
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->view('Createslot_view');
    }

    public function displayCKappointment()
    {
        echo "entered displayCKappointment()";
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->model("Slot_Model");
        $data['patients'] = $this->Slot_Model->getPatients();
        $this->load->view('CKappoinment', $data);
    }

    public function enterSlot()
    {
        echo "entered enterSlot()";
        $this->load->helper("form");
        $this->load->helper("url");
        $submitData = $this->input->post("input_add");

        //Used to check if the submit button works
        if ($submitData == false) {
            return;
        }

        //This gets the variable that was typed into the search box
        $SlotId_entered = $this->input->post("SlotId_entered");
        $DocId_entered = $this->input->post("DocId_entered");
        $SlotDate_entered = $this->input->post("SlotDate_entered");
        $Starttime_entered = $this->input->post("Starttime_entered");
        $Finishtime_entered = $this->input->post("Finishtime_entered");
        $Cost_entered = $this->input->post("Cost_entered");
        echo "</br>";
        echo $SlotId_entered;
        $this->load->model("Slot_Model");
        echo "back in searchPatient";
        //This array holds the result of the query
        $this->Slot_Model->enter_slot($SlotId_entered, $DocId_entered, $SlotDate_entered, $Starttime_entered, $Finishtime_entered, $Cost_entered);
    }

    //Used to delete a slot
    public function deleteSlot()
    {
        echo "entered deleteSlot()";
        $this->load->helper("form");
        $this->load->helper("url");
        $Id = 1;
        $this->load->model("Slot_Model");
        $this->Slot_Model->delete_slot($Id);
    }

    //Used to delete a slot
    public function updateSlot()
    {
        echo "entered updateSlot()";
        $this->load->helper("form");
        $this->load->helper("url");
        $Id = 1;
        $DocId = 4;
        $SlotDate = "2018-04-23T01:58:47";
        $Starttime = "9:00";
        $Finishtime = "9:30";
        $Cost = 60;
        $this->load->model("Slot_Model");
        $this->Slot_Model->update_slot($Id, $DocId, $SlotDate, $Starttime, $Finishtime, $Cost);
    }
}
