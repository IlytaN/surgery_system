<?php

class Slot_Model extends CI_Model
{

    function return_slot($date_entered)
    {
        $date = $this->input->post('date');

        //Used to open database
        $this->load->database();


        //Used to get a week of slots need to fix it
        //$query = $this->db->query("SELECT * FROM Slot WHERE SlotDate BETWEEN '$date_entered' AND '$date7' ORDER BY start_time");
        //Used to get a single day of appointments
        $query = $this->db->query("SELECT * FROM Slot WHERE SlotDate like '$date_entered' ORDER BY start_time");
        $query->result_array();

        return $query->result_array();

        /*
        if ($query->num_rows() > 0) {
            // output data of each row
            while($row = $query->result()) {
                echo "SlotId: " . $row["SlotId"]. " - DocId: " . $row["DocId"]. " - Slot Date: " . $row["SlotDate"]. " - Start time: " . $row["start_time"]." - Finish time: " . $row["finish_time"]." - Cost: " . $row["cost"]."<br>";
            }
        }
        else
        {
            echo "0 results";
        }
        */
    }

    //Used to return all patients
    function getPatients()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM Patients");
        $query->result_array();
        return $query->result_array();
    }

    function getDoctors()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM doctors");
        $query->result_array();
        return $query->result_array();
    }

    //Used to return all appointments
    function getAppointments()
    {
        $this->load->database();
        $query = $this->db->query("SELECT SlotId, DocId, SlotDate,PatId, PatName, DocName, start_time, finish_time FROM appointments JOIN patients using(PatId) JOIN slot using(SlotId) JOIN doctors using(DocId)");
        $query->result_array();
        return $query->result_array();
    }

    function getAppointmentById($Id)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM Slot WHERE SlotID = '$Id'");
        return $query->result_array();
    }

    function return_patient($patient_entered)
    {
        echo "entered return_patient";
        $date = $this->input->post('date');
        echo "</br>";
        //echo $date;
        //echo $date_entered;
        //echo $date_entered;
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

    function update_appointment($PatId, $DocId, $Starttime, $Endtiem, $Date)
    {
        $this->load->database();

    }

    //Function used to enter a slot into the slot table
    function enter_appointment($Patientname, $Doctorname, $Starttime, $Finishtime, $Date, $Cost)
    {
        $this->load->database();


        $con = mysqli_connect("localhost", "root", "", "surgtest");
        $sql = "SELECT DocId FROM doctors WHERE DocName Like '$Doctorname'";
        $result = mysqli_query($con, $sql);
        $rs = mysqli_fetch_array($result);
        $DocId = $rs['DocId'];

        $sql = "SELECT DocId FROM slot WHERE DocId Like '$DocId' and SlotDate like'$Date' and start_time like'$Starttime' and finish_time like '$Finishtime'";
        $result = mysqli_query($con, $sql);
        $rowcount = mysqli_num_rows($result);

        //To check if the time slot is already taken
        if ($rowcount > 0) {
            echo "Already exists";
        } else {
            $sql = "SELECT DocId FROM doctors WHERE DocName Like '$Doctorname'";
            $result = mysqli_query($con, $sql);
            $rs = mysqli_fetch_array($result);
            // Used to store the doctors id to be used in another query
            // https://stackoverflow.com/questions/28634852/how-to-store-a-variable-from-a-sql-query-php
            $DocId = $rs['DocId'];

            //Used to get the patients id to be inserted into the appointment table
            $sql = "SELECT PatId FROM patients WHERE PatName Like '$Patientname'";
            $result = mysqli_query($con, $sql);
            $rs = mysqli_fetch_array($result);
            $PatId = $rs['PatId'];

            //Inserts the information into the table slot
            $query = $this->db->query("INSERT INTO slot (DocID, SlotDate, start_time, finish_time, cost) VALUES('$DocId', '$Date', '$Starttime', '$Finishtime', '$Cost')");

            //Used to get SlotId to insert into the table appointments
            $sql = "SELECT SlotId FROM slot WHERE DocId Like '$DocId' AND SlotDate Like '$Date' AND start_time like '$Starttime'";
            $result = mysqli_query($con, $sql);
            $rs = mysqli_fetch_array($result);
            $SlotId = $rs['SlotId'];

            $query = $this->db->query("INSERT INTO Appointments (PatId, SlotId) VALUES('$PatId', $SlotId)");
        }
    }

    //Function used to enter a slot into the slot table
    function enter_slot($SlotId_entered, $DocId_entered, $SlotDate_entered, $Starttime_entered, $Finishtime_entered, $Cost_entered)
    {
        $this->load->database();
        /*
        $data = array(
            'SlotId'=>$SlotId_entered,
            'DocId'=>$DocId_entered,
            'SlotDate'=>$SlotDate_entered,
            'start_time'=>$Starttime_entered,
            'finish_time'=>$Finishtime_entered,
            'cost'=>$Cost_entered
        );

        $this->db->insert('slot',$data);
        */

        $query = $this->db->query("INSERT INTO slot VALUES('$SlotId_entered', '$DocId_entered', '$SlotDate_entered', '$Starttime_entered', '$Finishtime_entered', '$Cost_entered')");

        //CK: query success? -> drives the frontend validation and confirmation menus.... TODO
    }

    function delete_slot($Id)
    {
        $this->load->database();
        $this->db->query("DELETE FROM Slot WHERE SlotId = '$Id'");
        $query = $this->getAppointments();
        return $query;
    }

    function update_slot($Id, $DocId, $SlotDate, $Starttime, $Finishtime, $Cost)
    {
        $this->load->database();
        $this->db->query("UPDATE Slot SET DocId = '$DocId', SlotDate = '$SlotDate', start_time = '$Starttime', finish_time = '$Finishtime', cost = '$Cost' WHERE SlotId = '$Id'");
        $query = $this->getAppointments();
        return $query;
    }
}

?>
