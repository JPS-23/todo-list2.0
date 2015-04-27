<?php 
	$task_id = strip_tags($_POST['id']);
	require('connect.php');//we dont need backslahses here because we are in the root folder
	$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
	if ($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")) {
		# code...
	}
 ?>