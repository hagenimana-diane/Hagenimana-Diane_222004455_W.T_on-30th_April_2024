<?php
session_start();
if (!isset($_SESSION['password'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About us</title>

</head>
<body>
  <div class="navbar-header-logo">
 <div class="background-body-nav">

   <div class="navbar-header"> 
    <h1 href="" style="color: white; text-transform: uppercase; text-align: center;">supermarket</h1>
<div class="left-set-ul">
    <ul>
        <li><a href="index.php">Home</a></li> 
        <li><a href="products.php">product</a></li>
        <li><a href="About us.php">About Us</a></li>
        <li><a href="contacts us.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div></div><h1 style="color: white; margin-top: 230px; margin: 100px; font-size: 60px; ">About Us</h1></div></div>


<div class="container1">
  <div class="col-1">
    <img src="afro-woman-holding-bucket-with-cleaning-items.jpg">
  </div>

  <div class="col-2-section1">
    <h2>online supermarket service <br>
    Agency since 2024</h2>
    <h2>We are proud to have a dedicated team<br> of professionals who are passionate about providing excellent service to our customers.</h2>
    <p>We are proud to have a dedicated team of professionals who are passionate about providing excellent service to our customers.</p>
  </div></div>

<div class="container2">
  <div class="col-01-img">
   
    <img src="happy-young-woman-wiping-kitchen-counter-wearing-yellow-gloves.jpg"> 
  </div>
  <div class="col-1-p1">
    <h1>emelyne</h1>
   <p> serveri from 2011 givin<br> goood service to our customers</p>
   </div>

  <div class="col-02-img"><img src="young-cleaning-man-wearing-casual-clothes.jpg"> </div>
  <div class="col-2-p2">
 <h1>josh</h1>
 <p> serveri from 2011 givin<br> goood service to our customers</p>
   </div></div>
  <div class="">
    <h1>trusted company in global</h1>
  </div>
</body></html>




<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: white;
  }
 .navbar-header-logo
 {
  width: 100%;
  height: 450px;
  background: url(image.png);
  
 }
 .background-body-nav
 {
  background: #536976;
  background: -webkit-linear-gradient(to right, #392E39,#436976);
  background: linear-gradient(to right, #392E39,#436976);
  opacity: 0.9;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  height: 450px;
 
 }





  .container1
  {
    width: 99%;
    height: 400px;
    border: 1px solid grey;
    display: flex;
    margin: 10px;
    border: none;

  }
  .col-1
  {
    width: 50%;
    height: 400px;

  }
   .col-1 img
   {
     width: fit-content;
    height: 400px;
    border: none;
    border-radius: 10px;
    
   }
   .col-1 img:hover
   {
      background: #536976;
  background: -webkit-linear-gradient(to right, #392E39,#436976);
  background: linear-gradient(to right, #392E39,#436976);
  opacity: 0.7;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: fit-content;
 
   }
   .col-02-img img:hover
   {
     background: #536976;
  background: -webkit-linear-gradient(to right, #392E39,#436976);
  background: linear-gradient(to right, #392E39,#436976);
  opacity: 0.7;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
   }
  .col-2-section1
  {
    width: 60%;
    text-align: center;
    background-color: white;
    box-shadow: 2px 10px 20px #dedadad4;
  }
  .container2
  {
    width: 100%;
    height: 300px;
    border: 1px solid grey;
    display: flex;
    margin-top: 50px;
    border: none;
  }
    .col-01-img
  {
    width: 40%;
    height: 400px;

    
  }
  .col-01-img img:hover
  {
  background: #536976;
  background: -webkit-linear-gradient(to right, #392E39,#436976);
  background: linear-gradient(to right, #392E39,#436976);
  opacity: 0.7;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 300px;
  }
  .col-01-img img
  {
    width: 100%;
    height: 300px;
    border-radius: 10px;
    box-shadow: 2px 10px 20px #dedadad4;
    
  }

   .col-1-p1
  {
    width: 30%;
    background-color: white;
    text-align: center;
    box-shadow: 2px 10px 20px #dedadad4;
  }
  .col-02-img
  {
    width: 40%;
  }
  .col-2-p2
  {
    background-color: white;
    width: 30%;
    text-align: center;
    box-shadow: 2px 10px 20px #dedadad4;

  }
  .col-02-img img
  {
    width: 100%;
    border-radius: 10px;
    box-shadow: 2px 10px 20px #dedadad4;

  }



ul {
  list-style: none;
}

ul li {
  display: inline-block;
  margin-right: 0px;
  padding: 10px;
  margin: 10px;
  font-family: sans-serif;
  margin-left: 30px;
  text-transform: capitalize;
  font-weight: bold;
  letter-spacing: 2px;
}

ul li a {
 
  text-decoration: none;
  color: white;
  text-transform: capitalize;
}
ul li:hover
{
  border-bottom: 5px solid white;
  font-weight: bold;
  font-family: sans-serif;
}
.left-set-ul
{
  margin-left: 300px;
}
</style>