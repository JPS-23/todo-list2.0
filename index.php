<!DOCTYPE html>
<html>
<head>
	<title> Todo-List 2.0</title>
	<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- this is a link -->
</head>
<body>
<div class="wrap">
	<div class="task-list">
		<ul>
			<?php require("includes/connect.php"); ?>
		</ul>
	</div>
	<form class="add-new-task" autocomplete="off">
		<input type="text" name="new-task" placeholder="Add new item...">
	</form>
</div>
</body>
</html>