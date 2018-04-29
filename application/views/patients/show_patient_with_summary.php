<!-- show all patients -->
<!-- link to test in browser: http://localhost/surgery_system/index.php/Patients/show_patients_with_summary -->
<h4>This is view : doctor views patients. Please design it</h4>
        <?php
        echo "
        <TABLE class='table table-hover'>
          <TR>
            <TH>ID</TH>
            <TH>Name</TH>
            <TH>Birthday</TH>
            <TH>Gender</TH>
            <TH>Address</TH>
            <TH>Summary</TH>
          </TR>
        ";
            foreach ($patient as $row) {
              echo '<tr><td>'.$row['PatId'].'</td>';
              echo '<td><b><a href="'.site_url('Patients/show_patient_details_doc').'/'.
      		$row['PatId'].'">'.$row['PatName'].'</a></b></td>';
              echo '<td>'.$row['PatBirthDate'].'</td>';
              echo '<td>'.$row['PatGender'].'</td>';
              echo '<td>'.$row['PatAddress'].'</td>';
              echo '<td>'.$row['summary'].'</td>';
            }
        echo "
        </TABLE>
        ";
        ?>
