<?php
	$name=$_POST["Fname"];
	$age=$_POST["Age"];
	$id=$_POST["AadharNo"];
	$bgrp=$_POST["Bloodgroup"];
	$sex=$_POST["Sex"];
	$mob=$_POST["MobileNo"];
	$pan=$_POST["PanNo"];
	$driv=$_POST["DrivingLicenceNo"];
	$prof=$_POST["Profession"];
	$add=$_POST["CurrentAddress"];
	$nat=$_POST["Nationality"];
	$state=$_POST["State"];
	$dis=$_POST["District"];
	$bank=$_POST["BankAccountNo"];
	$pass=$_POST["Password"];
	$conf=$_POST["confirm"];



	$link = mysqli_connect("localhost", "kaushik", "12345","project_poolcars");
       // move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], "uploads/" . $id .".". $imageFileType);
        $sql = "INSERT INTO data VALUES('$id','$name','$age','$bgrp','$sex','$mob','$pan','$driv','$prof','$add','$nat','$state','$dis','$bank','$pass')";
	if(mysqli_query($link, $sql))
	{
    		echo "Records inserted successfully.";
	}
	else
	{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>
