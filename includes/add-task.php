<?php
	$task = strip_tags($POST['task']);
	$date = date('Y-m-d');//this is for the date
	$time = date('H:i:s');//this is for the time

	include('connect.php');//were going to our database here

	$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
	$mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");//this is going to run a query

	$query = "SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time' ";

	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$task_id = $row['id'];
			$task_name = $row['task'];
	}
}

$mysqli->close();//this closes the connection

echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
	
?>