<?php
	$date = $_POST['date'];
	$CID = $_POST['CID'];
	$Cname = $_POST['Cname'];
	$dateob = $_POST[''];
	$datefs = $_POST[''];
	$sex = $_POST[''];
	$mID = $_POST[''];
	$mname = $_POST[''];
	$fID = $_POST[''];
	$fname = $_POST[''];
	$location = $_POST[''];
	$add = $_POST[''];
	$BCG = $_POST[''];
	$dateBCG = $_POST[''];
	$re = $_POST[''];
	$datere = $_POST[''];
	$pd = $_POST[''];
	$datepd = $_POST[''];
	$p1 = $_POST[''];
	$datep1 = $_POST[''];
	$p2 = $_POST[''];
	$datep2 = $_POST[''];
	$p3 = $_POST[''];
	$datep3 = $_POST[''];
	$dpt = $_POST[''];
	$datedpt = $_POST[''];
	$Hep = $_POST[''];
	$dateHep = $_POST[''];
	$hip = $_POST[''];
	$datehip = $_POST[''];
	$ms = $_POST[''];
	$datems = $_POST[''];
	$yf = $_POST[''];
	$dateyf = $_POST[''];
	$vit = $_POST[''];
	$datevit = $_POST[''];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>