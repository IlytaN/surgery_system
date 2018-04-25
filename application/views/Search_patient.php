<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient search</title>
</head>
<body>
	<?php echo form_open("http://localhost/WDD/Surgery/CodeIgniter-3.1.8/index.php/Slot/searchPatient");?>
	<?php echo form_input("patient_entered", "Enter Patient");?>
	<?php echo form_submit("input_add", "Search");?>
	<table>
		<tr>
			<th>PatId</th>
			<th>PatName</th>
			<th>PatBirthDate</th>
			<th>PatGender</th>
			<th>PatAddress</th>
		</tr>
		<?php
			foreach($slotInfo as $key => $value){
				echo "<tr>
					<td>".$value['PatId']."</td>
					<td>".$value['PatName']."</td>
					<td>".$value['PatBirthDate']."</td>
					<td>".$value['PatGender']."</td>
					<td>".$value['PatAddress']."</td>
				</tr>";
			}
		?>
	</table>
</body>
</html>