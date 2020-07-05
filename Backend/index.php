<?php
	$date = $_POST['date'];
	$CID = $_POST['childNumber'];
	$Cname = $_POST['childName'];
	$dateob = $_POST['dateOfBirth'];
	$datefs = $_POST['dateFistSeen'];
	$sex = $_POST['sex'];
	$mID = $_POST['motherId'];
	$mname = $_POST['motherName'];
	$fID = $_POST['fatherID'];
	$fname = $_POST['fatherName'];
	$location = $_POST['location'];
	$add = $_POST['adddress'];
	$BCG = $_POST['bcg'];
	$dateBCG = $_POST['dateofBCG'];
	$re = $_POST['revaccination'];
	$datere = $_POST['dateOfRevaccination'];
	$pd = $_POST['polioBirthDose'];
	$datepd = $_POST['dateOfPolioBirthDose'];
	$p1 = $_POST['1stPolio'];
	$datep1 = $_POST['dateof1stPolio'];
	$p2 = $_POST['2ndPolio'];
	$datep2 = $_POST['dateOf2ndPolio'];
	$p3 = $_POST['3dPolio'];
	$datep3 = $_POST['dateOf3rdPolio'];
	$dpt = $_POST['dpt_hepb_hib1'];
	$datedpt = $_POST['dateOfDpt_hepb_hib1'];
	$Hep = $_POST['dpt_hepb_hib2'];
	$dateHep = $_POST['dateofDpt_hepb_hib2'];
	$hip = $_POST['dpt_hepb_hib3'];
	$datehip = $_POST['dateofDpt_hepb_hib3'];
	$ms = $_POST['measles'];
	$datems = $_POST['dateMeasles'];
	$yf = $_POST['yellowFeaver'];
	$dateyf = $_POST['dateOfYellowFeaver'];
	$vit = $_POST['vitaminA'];
	$datevit = $_POST['dateOfVitaminA'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','immunization_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into child_immune(date,
		childNumber,
		childName,
		dateOfBirth,
		dateFistSeen,
		sex,
		motherId,
		motherName,
		fatherID,
		fatherName,
		location,
		adddress,
		bcg,
		dateofBCG,
		revaccination,
		dateOfRevaccination,
		polioBirthDose,
		dateOfPolioBirthDose,
		1stPolio,
		dateof1stPolio,
		2ndPolio,
		dateOf2ndPolio,
		3dPolio,
		dateOf3rdPolio,
		dpt_hepb_hib1,
		dateOfDpt_hepb_hib1,
		dpt_hepb_hib2,
		dateofDpt_hepb_hib2,
		dpt_hepb_hib3,
		dateofDpt_hepb_hib3,
		measles,
		dateMeasles,
		yellowFeaver,
		dateOfYellowFeaver,
		vitaminA,
		dateOfVitaminA) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("iisiisisissssisisisisisisisisisisisi", $date,
		$CID,
		$Cname,
		$dateob,
		$datefs,
		$sex,
		$mID,
		$mname,
		$fID,
		$fname,
		$location,
		$add,
		$BCG,
		$dateBCG,
		$re,
		$datere,
		$pd,
		$datepd,
		$p1,
		$datep1,
		$p2,
		$datep2,
		$p3,
		$datep3,
		$dpt,
		$datedpt,
		$Hep,
		$dateHep,
		$hip,
		$datehip,
		$ms,
		$datems,
		$yf,
		$dateyf,
		$vit,
		$datevit);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>