<!-- Medicines model manages Medicines data -->
<?php
Class Patients_model extends CI_model {
  // get all patients
	public function getPatient(){
		$this->db->select('*');
		$this->db->from('patients');
		return $this->db->get()->result_array();
	}
	// get a patient's details
	public function getPatientDetails($p_id){
		$this->db->select('*');
		$this->db->from('patients');
		$this->db->join('MedicalHistory','MedicalHistory.PatId=patients.PatId');
		$this->db->where('MedicalHistory.PatId',$p_id);
		return $this->db->get()->result_array();
	}
	// add a patient
  public function addPatient($inserted_data){
  $this->db->insert('patients',$inserted_data);
  if ($this->db->affected_rows() > 0)
    return true;
  else return false;
  }
	// delete a patient
	public function deletePatient($deleted_data){
	$this->db->where('PatId', $deleted_data);
	$this->db->delete('patients');
	if ($this->db->affected_rows() > 0)
		return true;
	else return false;
	}
	// update patient details
	public function updatePatient($update_data,$p_id){
		$this->db->where('PatId', $p_id);
		$this->db->update('patients',$update_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

}
