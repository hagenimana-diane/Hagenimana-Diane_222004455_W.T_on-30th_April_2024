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
<title>Contact Us</title>
<link rel="stylesheet" href="styles.css">
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;

}
.containermix
{
  background-color: #23202012;
  width: 100%;
  height: 50%;
  border: 1px solid black;
  display: flex;
  border: none;

}
.containermix1
{
  width: 35%;
  height: 435px;
  background: transparent;
  box-shadow: 2px 5px 15px #dedadad4;
  margin-top: 50px;

}
.inline
{
  width: 400px;
  height: 250px;
  background-color: #ffffff26;
 
  text-align: center;
  border-radius: 8px;

}
.inline
{
  margin: 20px;
}

.container {
  width: 45%;
  height: 45%;
  margin: 50px auto;
  padding: 20px;
  background: transparent;
  border-radius: 5px;
  box-shadow: 2px 10px 20px #dedadad4;
}

.container h2 {
  text-align: center;
  }

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  margin-bottom: 5px;
}

.input-group input,
.input-group textarea {
  width: 95%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.input-group textarea {
  resize: vertical;
}

button {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #0056b3;
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
    </div></div><h1 style="color: white; margin-top: 230px; margin: 100px; font-size: 60px; ">Contuct Us</h1></div></div>

 
  
<div class="containermix">
  <dir class="containermix1">
    <h1>we're happy to help you</h1>
    <p>best sonline supermarket is ready to serve yyou where you're.
    supermarket work is a professional website layout for your business</p>
    <div class="inline">
      <h1>contact information</h1>
      <h3>kigali 20, 0150 gasabo rwanda</h3>
      <h3>250782376564</h3>
      <h3>info@company.com</h3>
    </div>

  </dir>
<div class="container">
  <form action="#" method="post">
    <h2>Contact Us</h2>
    <div class="input-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="input-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="input-group">
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit">Submit</button>
  </form>
</div></div>

</body>
</html>
