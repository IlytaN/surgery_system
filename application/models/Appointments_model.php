<?php

Class Appointments_model extends CI_model
{
// add an appointment
    public function addAppointment($inserted_data)
    {
        $this->db->insert('appointments', $inserted_data);
        if ($this->db->affected_rows() > 0)
            return true;
        else return false;
    }

}

?>
