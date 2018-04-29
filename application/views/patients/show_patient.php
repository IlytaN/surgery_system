<!-- show all patients -->
<!-- link to test in browser: http://localhost/surgery_system/index.php/Patients/show_patients -->
<h4>This is view 2.3: secretary views patients. Please design it</h4>
        <?php
        echo "
        <TABLE class='table table-hover'>
          <TR>
            <TH>ID</TH>
            <TH>Name</TH>
            <TH>Birthday</TH>
            <TH>Gender</TH>
            <TH>Address</TH>
          </TR>
        ";
            foreach ($patient as $row) {
              echo '<tr><td>'.$row['PatId'].'</td>';
              echo '<td><b><a href="'.site_url('Patients/show_patient_details').'/'.
      		$row['PatId'].'">'.$row['PatName'].'</a></b></td>';
              echo '<td>'.$row['PatBirthDate'].'</td>';
              echo '<td>'.$row['PatGender'].'</td>';
              echo '<td>'.$row['PatAddress'].'</td>';
              echo '<td><button class="btn btn-basic"><a href="'.site_url('Patients/delete_patient').'/'.
      		$row['PatId'].'">Delete</a></button></td></tr>';
            }
        echo "
        </TABLE>
        <button class='btn btn-basic'><a href=".site_url('Patients/add_patient').">Add new patient</a></button>
        ";
        ?>
