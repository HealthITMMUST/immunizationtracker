<?php
include("index.php");


if (isset($_POST['submit'])) {
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

	$result = mysqli_query($mysqli,"INSERT into child_immune values('','$date',
		'$CID',
		'$Cname',
		'$dateob',
		'$datefs',
		'$sex',
		'$mID',
		'$mname',
		'$fID',
		'$fname',
		'$location',
		'$add',
		'$BCG',
		'$dateBCG',
		'$re',
		'$datere',
		'$pd',
		'$datepd',
		'$p1',
		'$datep1',
		'$p2',
		'$datep2',
		'$p3',
		'$datep3',
		'$dpt',
		'$datedpt',
		'$Hep',
		'$dateHep',
		'$hip',
		'$datehip',
		'$ms',
		'$datems',
		'$yf',
		'$dateyf',
		'$vit',
		'$datevit' )

		");
	if ($result) {
		echo "success";
		# code...
	}
	else{
		echo "failed";
	}
}

?>