<h2>Patient details</h2>
<TABLE class="table table-hover">
  <?php
  foreach ($patient as $row) {
    echo '<TR><TH>ID</TH><TD>'.$row['PatId'].'</TD></TR>
      <TR><TH>Name</TH><TD>'.$row['PatName'].'</TD></TR>
      <TR><TH>Birthday</TH><TD>'.$row['PatBirthDate'].'</TD></TR>
      <TR><TH>Gender</TH><TD>'.$row['PatGender'].'</TD></TR>
      <TR><TH>Address</TH><TD>'.$row['PatAddress'].'</TD></TR>
      <TR><TH>Allergies</TH><TD>'.$row['Allergies'].'</TD></TR>
      <TR><TH>Cancer</TH><TD>'.$row['Cancer'].'</TD></TR>
      <TR><TH>Depression</TH><TD>'.$row['Depression'].'</TD></TR>
      <TR><TH>Epilepsi</TH><TD>'.$row['Epilepsy'].'</TD></TR>
      <TR><TH><button class="btn btn-basic"><a href="'.site_url('Patients/edit_patient').'/'.
      $row['PatId'].'">Edit</a></button></TH>
      <TH><button class="btn btn-basic"><a href="'.site_url('Patients/delete_patient').'/'.
      $row['PatId'].'">Delete</a></button></TH></TR>';
  }
  ?>
</TABLE>
