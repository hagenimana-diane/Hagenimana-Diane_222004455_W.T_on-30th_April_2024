<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hagenimana_diane_sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    
    // Insert user data into database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("location:login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        input {
            height: 40px;
            width: 75%;
            
            text-transform: capitalize;
             
           
            
        }
        
       
        
        h1 {
            color: #000;
            text-transform: uppercase;
        }
        
        .btn {
           
            margin: 18px;
          
            height: 50px;
            width: 76%; 
            margin: 18px;
        }
        
        .form-box {
            margin-left: 250px;
            margin-right: 250px;
            border: 2px solid black;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 7px 10px 25px 10px grey;
            border: none;
        }
        i a
        {
            font-family: sans-serif;
        
            font-weight: bolder;
        }
        i 
        {
            font-weight: bolder;
        }
    </style>
</head>
<body>
      <!--welcome-home section --><center>
      <section id="home" class="welcome-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="header-text">
                                <h2>WELCOME <span>,</span> <br> TO<br> SUPERMARKETS<span>.</span> </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section></center>
    <section>
        <!--Register section -->
        <center><div class="form-box">
            <div class="contact-form" id="form">
                <h1>Register to use our website</h1>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                            <input type="username" class="form-control" id="username" name="username" placeholder="username" required>
                            </div><br><br>
                        </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div><br><br>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required><br>
                                    <button class="btn" type="submit">Register</button>
                                    <br><br>
                                    <i>alread have an account  <a href="login.php">login</a></i>
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div>
                    </div>
                </form><!--/form-->
            </div>
            </div>
        </center>
    </section>
</body>
</html>
