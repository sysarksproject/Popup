<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_expense'])){
		$expensedate = $_POST['expensedate'];
		$expensetype = $_POST['expensetype'];
		$expensedescr = $_POST['expensedescr'];
		$expenseamount = $_POST['expenseamount'];
		$conn->query("INSERT INTO `expenses` VALUES('', '$expensedate', '$expensetype', '$expensedescr','$expenseamount')") or die(mysqli_error());
		header('location: index.php');
	}
	if (empty($_POST['query'])) {

    $msg = "Text can't be empty";
    $_SESSION['myusername']="something";
    header("Location: index.php ");

}
?>