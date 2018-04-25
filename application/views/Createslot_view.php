<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slot</title>
</head>
<body>
	<?php echo form_open("http://localhost/surgery_system/index.php/Slot/enterSlot");?>
	<?php echo form_input("SlotId_entered", "Enter SlotId");?>
	<?php echo form_input("DocId_entered", "Enter DocId");?>
	<?php echo form_input("SlotDate_entered", "Enter SlotDate");?>
	<?php echo form_input("Starttime_entered", "Enter Start time");?>
	<?php echo form_input("Finishtime_entered", "Enter Finish time");?>
	<?php echo form_input("Cost_entered", "Enter Cost");?>
	<?php echo form_submit("input_add", "Enter");?>
</body>
</html>