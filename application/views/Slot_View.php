<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slot</title>
</head>
<body>
	<script>
		function cellClicked(){
			<?php echo"The onclick works";?>
			<?php echo form_open("http://localhost/WDD/Surgery/CodeIgniter-3.1.8/index.php/Slot/deleteSlot");?>
		}
	</script>
	<?php echo form_open("http://localhost/surgery_system/index.php/Slot/searchDate");?>
	<?php echo form_input("date_entered", "Enter Date");?>
	<?php echo form_submit("input_add", "Search");?>
	<?php echo form_submit("delete_slot", "Delete");?>
	<table>
		<tr>
			<th onclick="cellClicked()">SlotId</th>
			<th>DocId</th>
			<th>SlotDate</th>
			<th>Start time</th>
			<th>Finish time</th>
			<th>Cost</th>
		</tr>
		<?php
			foreach($slotInfo as $key => $value){
				echo "<tr>
					<td>".$value['SlotId']."</td>
					<td>".$value['DocId']."</td>
					<td>".$value['SlotDate']."</td>
					<td>".$value['start_time']."</td>
					<td>".$value['finish_time']."</td>
					<td>".$value['cost']."</td>
				</tr>";
			}
			echo"<button>Delete</button>";
		?>
		<tr>
			<button type="button">Delete</button>
		</tr>
	</table>
</body>
</html>