<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>

<style>
body{
    /*background-position:center;*/
   background-image:url("r.jpg");
    background-repeat: no-repeat;
    position: relative;
    background-size: 2000px 1000px;
    
    /*background-size: cover;*padding: 15px 32px;*/
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 40px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  position:relative;
  top:-800px;
  left:1400px;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  position: relative;
  top:-800px;
  left:1400px;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="y.jpg" alt="John" style="width:100%">
 <p class="title"><?php echo $_SESSION['user']['Name']; ?></p>
  <h1><?php echo"Age ", $_SESSION['user']['Age']; ?></h1>
  <h1><?php echo "Bgrp ",$_SESSION['user']['Bloodgroup']; ?></h1>
  <h1><?php echo "Sex ",$_SESSION['user']['Sex']; ?></h1>
  <h1><?php echo "Mob ",$_SESSION['user']['Mobile No.']; ?></h1>
  <h1><?php echo "State ",$_SESSION['user']['State']; ?></h1>
  <h1><?php echo "District ",$_SESSION['user']['District']; ?></h1>
 <!-- <a href="#" class="button">Click for more info</button></a>-->
</div>
</div>
<div class="dropdown">
  <button class="dropbtn">For_more_info</button>
  <div class="dropdown-content">
  <a href='#'><?php echo "Dl ",$_SESSION['user']['Driving Licence No.']; ?></a>
  <a href="#"><?php echo "B No. ",$_SESSION['user']['Bank account no.']; ?></a>
  <a href="#"><?php echo "Addr ",$_SESSION['user']['Current Address']; ?></a>
  <a href="#"><?php echo $_SESSION['user']['Aadhar No.']; ?></a>
  <a href="#"><?php echo $_SESSION['user']['Profession']; ?></a>
  </div>


</body>
</html>
