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
public function show_patients()
{
  $data['page']='patients/show_patient';
  $this->load->view('menu/content',$data);
}
// show patient page
public function add_patients()
{
$data['page']='patients/add_patient';
$this->load->view('menu/content',$data);
}


}

 ?>
