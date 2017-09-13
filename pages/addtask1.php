<?php
	require_once '../connect.php';
	if(ISSET($_POST['saves_task'])){
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$duration = $_POST['duration'];
		$taskamt = $_POST['taskamt'];
		$descr = $_POST['descr'];
		$taskdetail = $_POST['taskdetail'];
		$conn->query("Update tasks set ('', '$startdate', '$enddate', '$duration','$taskamt','$descr','$taskdetail')") or die(mysqli_error());
		header('location: index.php');
	}
?>