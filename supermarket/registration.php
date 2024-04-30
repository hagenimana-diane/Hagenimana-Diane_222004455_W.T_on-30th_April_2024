<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Assuming you have a password field
    
    // Validate form data (You can add more validation if needed)
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill all the fields";
    } else {
        // Connect to your database (replace with your database credentials)
        $servername = "localhost";
        $dbusername = "your_username";
        $dbpassword = "your_password";
        $dbname = "your_database_name";
        
        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Prepare SQL statement to insert data into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        
        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        // Close database connection
        $conn->close();
    }
}
?>
