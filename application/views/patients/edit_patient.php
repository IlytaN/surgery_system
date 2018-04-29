
  <h3>Edit Patient details</h3>
<FORM method="POST" action="<?php echo site_url('patients/edit_details'); ?>">
    <TABLE class="table table-bordered">
    	<TR><TH>id</TH><TH>Name</TH><TH>Birthday</TH><TH>Gender</TH><TH>Address</TH></TR>
    	<?php
    	foreach ($patient as $row) {
    		echo '<tr><td><input type="hidden" name=PatId[] value="'.$row['PatId'].'"/></td>';
        echo '<tr><td><input class="form-control" type="text" step="any" name="PatName[]" value="';
          echo $row['PatName'];
          echo '"/></td>';
        echo '<tr><td><input class="form-control" type="text" step="any" name="PatBirthDate[]" value="';
          echo $row['PatBirthDate'];
          echo '"/></td>';
        echo '<td><input class="form-control" type="text" name="PatGender[]" value="';
          echo $row['PatGender'];
          echo '"/></td>';
        echo '<td><input class="form-control" type="text" name="PatAddress[]" value="';
            echo $row['PatAddress'];
            echo '"/></td></tr>';
    	}
    	?>
    </TABLE>
    <tr><td></td><td><input class="btn btn-primary" type="submit" name="btnSave" value="Save"/></td></tr>
  </FORM>
