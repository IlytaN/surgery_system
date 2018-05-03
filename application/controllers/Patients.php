<!-- This file is used only for reference, as most functions have been moved to DoctorPatients.php
			and SecretaryPatients.php -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Patients extends CI_Controller {
	function __Construct(){
				parent::__Construct();
				// $this->load->helper(array('form', 'url'));
				// $this->load->library(array('session', 'form_validation', 'email'));
				$this->load->database();
				// $this->load->model('user_model');
				$this->load->model('Patients_model');
		}
  // show all patients
  	public function show_patients() {
  		$this->load->model('Patients_model');
  		$data['patient']=$this->Patients_model->getPatient();
  		$data['page']='patients/show_patient';
  		$this->load->view('menu/content',$data);
  	}
		// show all patients with summary
			public function show_patients_with_summary() {
				$this->load->model('Patients_model');
				$data['patient']=$this->Patients_model->getPatientWithSummary();
				$data['page']='patients/show_patient_with_summary';
				$this->load->view('menu/content',$data);
			}
  // add a new patient
    public function add_patient()
  	{
      // Need fix
          // $this->load->view('patients/add_patient');
          $this->load->model('Patients_model');
          $btn=$this->input->post('btnSave');
          if (isset($btn)) {
              $insert_data=array(
                'PatId' => "",
                'PatName'=>$this->input->post('name'),
                'PatBirthDate'=>$this->input->post('BirthDate'),
                'PatGender'=>$this->input->post('Gender'),
                'PatAddress'=>$this->input->post('Address')
                );
              $this->Patients_model->addPatient($insert_data);
            }
            $data['page']='patients/add_patient';
            $this->load->view('menu/content',$data);
  	}
		// go to patient details page (secretary)
		public function show_patient_details($p_id) {
			$this->load->model('Patients_model');
			$data['patient']=$this->Patients_model->getPatientDetails($p_id);
			$data['page']='patients/show_patient_details';
			$this->load->view('menu/content',$data);
		}
		// go to patient details page (doctor)
		public function show_patient_details_doc($p_id) {
			$this->load->model('Patients_model');
			$data['patient']=$this->Patients_model->getPatientDetails($p_id);
			$data['page']='patients/show_patient_details_doc';
			$this->load->view('menu/content',$data);
		}
  	// delete a patient
  	public function delete_patient($p_id)
  	{
  				$this->load->model('Patients_model');
  				$this->Patients_model->deletePatient($p_id);
  				$this->show_patients();
  	}
    // edit page
  	public function edit_patient($p_id)
  	{
				$this->load->model('Patients_model');
				$data['patient']=$this->Patients_model->getPatientDetails($p_id);
				$data['page']='patients/edit_patient';
				$this->load->view('menu/content',$data);
  	}
		// update database when user clicks "save"
		public function edit_details() {
			$this->load->model('Patients_model');
			$btn=$this->input->post('btnSave');
			if (isset($btn)) {
				$PatId=$this->input->post('PatId');
				$PatName=$this->input->post('PatName');
				$PatBirthDate=$this->input->post('PatBirthDate');
				$PatGender=$this->input->post('PatGender');
				$PatAddress=$this->input->post('PatAddress');
				//calculate rows
				$rows=0;
				foreach ($PatId as $a) {
					$rows++;
				}
				//update database row by row
				for($x=0; $x < $rows; $x++ ){
					$update_data=array(
						"PatName"=>$PatName[$x],
						"PatBirthDate"=>$PatBirthDate[$x],
						"PatGender"=>$PatGender[$x],
						"PatAddress"=>$PatAddress[$x]
						);
					$this->Patients_model->updatePatient($update_data,$PatId[$x]);
				}
			}
			$data['patient']=$this->Patients_model->getPatient();
			$data['page']='patients/show_patient';
			$this->load->view('menu/content',$data);
		}
}
