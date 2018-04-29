<h1 class="text-info">Add a patient</h1>
  <FORM class="form-group" action="<?php echo site_url('patients/add_patient'); ?>" method="post">
      <TABLE>
        <TR><TD>Name</TD><TD><input class="form-control" name="name" for="name" required /></TD></TR>
        <TR><TD>Birthdate</TD><TD><input class="form-control" name="BirthDate" required /></TD></TR>
        <TR><TD>Gender</TD><TD><input class="form-control" name="Gender" required /></TD></TR>
        <TR><TD>Address</TD><TD><input class="form-control" name="Address" required /></TD></TR>
      	<TR><TD></TD><TD><input class="btn btn-info" type="submit" name="btnSave" value="Save"/></TD></TR>
      </TABLE>
  </FORM>

<?php
if (isset($test)) {
	if ($test)
		echo 'Data Inserted';
	else
		echo 'Something went wrong';
}
?>
