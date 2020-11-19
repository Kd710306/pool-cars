<?php
	session_start();
	$servername = "localhost";
        $username = "btech2017";
        $password = "btech2017";
        $dbname = "btech2017";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
	}
	$sql='update trial_1 set booked=1 where `Mobile No.`='.$_SESSION['user1']['`Mobile No.`'];
	$result = $conn->query($sql);
	$conn->close();
?>
