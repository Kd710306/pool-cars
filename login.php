<?php
        session_start();
        function isLoggedIn()
        {
            if (isset($_SESSION['user'])) {
                return true;
            }
            else{
                return false;
            }
        }
        $mobile_no=$_GET['user'];
        $password=$_GET['pass'];
        $conn= mysqli_connect("localhost","btech2017","btech2017","btech2017");
        if($conn){
        $sql="select * from trial_1 where `Mobile No.`=$mobile_no and Password=$password";
        $res=mysqli_query($conn,$sql);
        if($res->num_rows>0)
        {
            $_SESSION['user'] = $res->fetch_assoc();
           // echo $_SESSION["user"]["id"];// put logged in user in session
            $_SESSION['success']  = "You are now logged in";
            //header('location: http://localhost/project/profile.php');
        }
	       else{
		         header("Location:proj.html");
  		         exit;
           // echo "yo yo";
            //location.replace("http://localhost/project/signup.html")
        }
        }
        $conn->close();
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
      	header('location: proj.html');
	exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="proj.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="header">
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						//echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        <!-- logged in user information -->
        <div class="main">
      <h1>Pool Cars &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp; &emsp; &emsp; &emsp;</h1>
    <a href="profile.php" class="btn"><?php echo $_SESSION['user']['Name']; ?></button></a>
    <a href="proj.html?logout='1'" class="btn">logout</a>
    <h3>&emsp; &emsp; &emsp;  &emsp; &emsp; &emsp;&emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <a href="#" class="btn">Tel_no</button></a>
    <a href="#" class="btn">About_us</button></a>
    <a href="#" class="btn" >Contact_us</button></a></h3>
    <a href="" class="notif"><span class="num"></span></a>
    </div>
    <div class="box-2" >
    <h2>Your one stop destination to book rides</h2>
        <form action='',method='get'>
            <label for="pickup"><b>Pickup</b></label>
            <input type="text" placeholder="enter pickup location" name="pickup" required></br>
            <label for="destination"><b>Destination</b></label>
            <input type="text" placeholder="enter drop location" name="destination" required></br>
          </br>
	    <a href="#" class="btn1">Search</button></a>
		<br>
		</br>
		<br>
		</br>
	<h1>Looking for someone to help you reach your destination</h1>
	    <br>
	    <a href="exp_4.php" class="btn2">Pool A Car </button></a>

          </form>
</body>
</html>
