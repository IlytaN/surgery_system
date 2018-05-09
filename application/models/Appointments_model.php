<?php
Class Appointments_model extends CI_model {
// add an appointment
public function addAppointment($inserted_data){
$this->db->insert('appointments',$inserted_data);
if ($this->db->affected_rows() > 0)
  return true;
else return false;
}

// view all appointments
public function getAppointments(){
  $this->db->select('AppId,DocName,PatName,start_time,finish_time');
  $this->db->from('appointments');
  $this->db->join('Slot','Slot.SlotId = Appointments.AppId');
  $this->db->join('Doctors','Doctors.DocId = Slot.DocId');
  $this->db->join('Patients','Patients.PatId = Appointments.PatId');
  return $this->db->get()->result_array();
}
}
 ?>
