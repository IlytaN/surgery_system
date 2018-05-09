<?php
	class Slot_Model extends CI_Model{
		
		function return_slot($date_entered){
			echo"entered return_slot";
			$date = $this->input->post('date');
			echo "</br>";
			echo $date;
			echo $date_entered;
			
			//echo $date_entered;
			//Used to open database
			$this->load->database();
			
			//Used to get a week of slots need to fix it
			//$query = $this->db->query("SELECT * FROM Slot WHERE SlotDate BETWEEN '$date_entered' AND '$date7' ORDER BY start_time");
			
			//Used to get a single day of appointments
			$query = $this->db->query("SELECT * FROM Slot WHERE SlotDate like '$date_entered' ORDER BY start_time");
			$query->result_array();
			
			//echo "<pre>";
			//print_r($query->result_array());
			//echo "</pre>";
			return $query->result_array();
		}
		
		function addPayment($Patientname, $Starttime, $AppointmentDate, $PaymentDate, $PaymentType){
			$this->load->database();
			
			$Patientname = "Conor Bourke";
			$Doctorname = "Jason Smith";
			$Starttime = "09:00";
			$AppointmentDate = "2018-05-10";
			$PaymentDate = "2018-05-10";
			$PaymentType = "Cash";
			
			$con = mysqli_connect("localhost", "root", "", "surgery");
		    $sql = "SELECT PatId FROM patients WHERE PatName = '$Patientname'";
			$result = mysqli_query($con, $sql);
		    $rs = mysqli_fetch_array($result);
		    $PatId = $rs['PatId'];
			echo($PatId);
			
			$sql = "SELECT DocId FROM doctors WHERE DocName Like '$Doctorname'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);	
			$DocId = $rs['DocId'];
			
			$sql = "SELECT SlotId FROM slot WHERE SlotDate = '$AppointmentDate' AND start_time = '$Starttime' AND DocId = '$DocId'";
			$result = mysqli_query($con, $sql);
		    $rs = mysqli_fetch_array($result);
		    $SlotId = $rs['SlotId'];
			echo($SlotId);
			
			$sql = "SELECT AppId FROM appointments WHERE SlotId = '$SlotId' AND PatId = '$PatId'";
			$result = mysqli_query($con, $sql);
		    $rs = mysqli_fetch_array($result);
		    $AppId = $rs['AppId'];
			echo("This is appId".$AppId);
			
			$sql = "SELECT payer FROM Payment WHERE payment_date = '$PaymentDate' and payer = '$Patientname'";
			$result = mysqli_query($con, $sql);
			$rowcount=mysqli_num_rows($result);
			
			//To check if the payment entered already exists(So we dont have duplicates)
			if($rowcount > 0)
			{
				echo"Already exists";
			}
			else
			{
				$query = $this->db->query("INSERT INTO Payment (AppId, payer, payment_method, payment_date) VALUES('$AppId', '$Patientname', '$PaymentType', '$PaymentDate')");
			}
		}
		
		//Used to return all patients
		function getPatients(){
			$this->load->database();
			$query = $this->db->query("SELECT * FROM patients");
			$query->result_array();
			return $query->result_array();
		}
		
		function getDoctors(){
			$this->load->database();
			$query = $this->db->query("SELECT * FROM doctors");
			$query->result_array();
			return $query->result_array();
		}
		
		//Used to return all appointments
		function getAppointments(){
			$this->load->database();
			$query = $this->db->query("SELECT SlotDate, PatName, DocName, start_time FROM appointments JOIN patients using(PatId) JOIN slot using(SlotId) JOIN doctors using(DocId)");
			$query->result_array();
			return $query->result_array();
		}
		
		function return_patient($patient_entered){
			echo"entered return_patient";
			$date = $this->input->post('date');
			echo "</br>";

			//Used to open database
			$this->load->database();
			
			//$date = "2017-11-04";
			$query = $this->db->query("SELECT * FROM patients WHERE PatName Like '$patient_entered'");
			$query->result_array();
			
			//echo "<pre>";
			//print_r($query->result_array());
			//echo "</pre>";
			return $query->result_array();
		}
		
		//Function used to enter a slot into the slot table
		function enter_appointment($Patientname, $Doctorname, $Starttime, $Finishtime, $Date, $Cost){
			$this->load->database();
			echo"In enter_appointment";
			echo"</br>";
			echo($Doctorname);
			
			/*
			$Patientname = "Conor Bourke";
			$Doctorname = "David Kane";
			$Starttime = "09:00";
			$Finishtime = "09:30";
			$Date = "2018-05-08";
			$Cost = 60;
			*/
			
			$con = mysqli_connect("localhost", "root", "", "surgery");
			$sql = "SELECT DocId FROM doctors WHERE DocName Like '$Doctorname'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);	
			$DocId = $rs['DocId'];
			
			$sql = "SELECT DocId FROM slot WHERE DocId Like '$DocId' and SlotDate like'$Date' and start_time like'$Starttime' and finish_time like '$Finishtime'";
			$result = mysqli_query($con, $sql);
			$rowcount=mysqli_num_rows($result);
			
			$query = $this->db->query( "SELECT DocId FROM slot WHERE DocId Like '$DocId' and SlotDate like'$Date' and start_time like'$Starttime' and finish_time like '$Finishtime'");
			$query->result_array();
			
			echo "<pre>";
			print_r($query->result_array());
			echo "</pre>";
			//To check if the time slot is already taken 
			if($rowcount > 0){
				echo"Already exists";
			}
			else
			{
				echo"Does not exist";
				$sql = "SELECT DocId FROM doctors WHERE DocName Like '$Doctorname'";
				$result = mysqli_query($con, $sql);
				$rs = mysqli_fetch_array($result);
				// Used to store the doctors id to be used in another query
				// https://stackoverflow.com/questions/28634852/how-to-store-a-variable-from-a-sql-query-php
				$DocId = $rs['DocId'];
				echo($DocId);
				echo"</br>";
				
				//Used to get the patients id to be inserted into the appointment table
				$sql = "SELECT PatId FROM patients WHERE PatName Like '$Patientname'";
				$result = mysqli_query($con, $sql);
				$rs = mysqli_fetch_array($result);
				$PatId = $rs['PatId'];
				echo($PatId);	
				
				//Inserts the information into the table slot
				$query = $this->db->query("INSERT INTO slot (DocID, SlotDate, start_time, finish_time, cost) VALUES('$DocId', '$Date', '$Starttime', '$Finishtime', '$Cost')");
				
				//Used to get SlotId to insert into the table appointments
				$sql = "SELECT SlotId FROM slot WHERE DocId Like '$DocId' AND SlotDate Like '$Date' AND start_time like '$Starttime'";
				$result = mysqli_query($con, $sql);
				$rs = mysqli_fetch_array($result);
				$SlotId = $rs['SlotId'];
				echo($SlotId);
				
				$query = $this->db->query("INSERT INTO Appointments (PatId, SlotId) VALUES('$PatId', $SlotId)");
			}
		}
		
		//Function used to enter a slot into the slot table
		function enter_slot($SlotId_entered, $DocId_entered, $SlotDate_entered, $Starttime_entered, $Finishtime_entered, $Cost_entered){
			$this->load->database();
			echo"In enter_slot";
			echo"</br>";
			echo($SlotId_entered);
			$query = $this->db->query("INSERT INTO slot VALUES('$SlotId_entered', '$DocId_entered', '$SlotDate_entered', '$Starttime_entered', '$Finishtime_entered', '$Cost_entered')");
		}
		
		function delete_appointment($Patientname, $Starttime, $Date){
			echo"entered delete_appointment";
			$this->load->database();
			
			$con = mysqli_connect("localhost", "root", "", "surgery");
		    $sql = "SELECT DocId FROM slot WHERE SlotDate Like '$Date' AND start_time like '$Starttime'";
			//$sql = "SELECT DocId FROM doctors WHERE DocName Like '$Doctorname'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);	
			$DocId = $rs['DocId'];
			echo"This is docid".$DocId;
			echo"</br>";
			
			$query = $this->db->query("SELECT SlotId FROM slot WHERE DocId Like '$DocId' AND SlotDate Like '$Date' AND start_time Like '$Starttime'");
			$query->result_array();
			
			echo "<pre>";
			print_r($query->result_array());
			echo "</pre>";
			
			$sql = "SELECT SlotId FROM slot WHERE DocId Like '$DocId' AND SlotDate Like '$Date' AND start_time Like '$Starttime'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);
			$SlotId = $rs['SlotId'];
			echo"This is Slotid".$SlotId;
			
			$sql = "SELECT PatId FROM patients WHERE PatName Like '$Patientname'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);	
			$PatId = $rs['PatId'];
			echo"This is patid".$PatId;
			
			$query = $this->db->query("DELETE FROM Slot WHERE DocId Like '$DocId' AND SlotDate Like '$Date' AND start_time Like '$Starttime'");
			$query = $this->db->query("DELETE FROM appointments WHERE SlotId Like '$SlotId' AND PatId Like '$PatId'");
		}
		
		function update_appointment($Patientname, $Starttime, $Date, $Doctorname, $newStarttime, $Finishtime, $newDate){
			echo"entered update_slot";
			$this->load->database();
			
			$con = mysqli_connect("localhost", "root", "", "surgery");
			
			$sql = "SELECT DocId FROM slot WHERE SlotDate Like '$Date' AND start_time like '$Starttime'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);
			$OldDocId = $rs['DocId'];
			echo"This is Olddocid ".$OldDocId;
			
			//Get new doctors id
			$sql = "SELECT DocId FROM doctors WHERE DocName Like '$Doctorname'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);
			$DocId = $rs['DocId'];
			echo"This is docid ".$DocId;
			
			$sql = "SELECT SlotId FROM slot WHERE DocId Like '$OldDocId' AND SlotDate Like '$Date' AND start_time Like '$Starttime'";
			$result = mysqli_query($con, $sql);
			$rs = mysqli_fetch_array($result);
			$SlotId = $rs['SlotId'];
			echo"This is Slotid".$SlotId;
			
			$query = $this->db->query("UPDATE Slot SET DocId = '$DocId', SlotDate = '$newDate', start_time = '$newStarttime', finish_time = '$Finishtime' WHERE SlotId = '$SlotId'");
		}
	}
?>