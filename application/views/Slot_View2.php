<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slot</title>
</head>
<body>
	<table>
		<tr>
			<th>SlotId</th>
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
		?>
	</table>
</body>
</html>