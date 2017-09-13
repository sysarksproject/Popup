<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_task'])){
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$duration = $_POST['duration'];
		$taskamt = $_POST['taskamt'];
		$descr = $_POST['descr'];
		$taskdetail = $_POST['taskdetail'];
		$conn->query("INSERT INTO `tasks` VALUES('', '$startdate', '$enddate', '$duration','$taskamt','$descr','$taskdetail')") or die(mysqli_error());
		header('location: index.php');
	}
	if (empty($_POST['query'])) {

    $msg = "Text can't be empty";
    $_SESSION['myusername']="something";
    header("Location: index.php ");

}
?>