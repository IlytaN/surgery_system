<?php defined("BASEPATH") or exit("no direct script access allowed");
/**
 *
 */
class Patients extends CI_Controller
{

  function __construct()
  {
    parent::__Construct();
    $this->load->database();

  }
  // show patient page
  public function doctor_app()
  {
  $data['page']='patients/doctor_app';
  $this->load->view('menu/content',$data);
  }
  public function add_patient()
  {
  $data['page']='patients/add_patient';
  $this->load->view('menu/content',$data);
  }
  public function doctor_visit()
  {
  $data['page']='patients/doctor_visit';
  $this->load->view('menu/content',$data);
  }
  public function patient_record()
  {
  $data['page']='patients/patient_record';
  $this->load->view('menu/content',$data);
  }
public function doctor_patient()
{      // create the data object
      $patients = array(
          array("id"=>1,"name"=>"Elijah Perez","dob"=>"06/17/2017","gender"=>"m","address"=>"dublin1"),
          array("id"=>2,"name"=>"Dillon Chase","dob"=>"05/04/2018","gender"=>"m","address"=>"dublin2"),
          array("id"=>3,"name"=>"Dustin Long","dob"=>"04/18/2019","gender"=>"f","address"=>"dublin3"),

      );


      $data['patients'] = $patients;
  $data['page']='patients/doctor_patient';
  $this->load->view('menu/content',$data);
}

}

 ?>
