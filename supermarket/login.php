<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Website</title>
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(SUPERMARKETS-IN-DUBAI.jpg);
}

header {
    background-color:skyblue;
    color: white;
    padding: 20px;
    text-align: center;
    
}

header h1{
    text-transform:uppercase; 
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

  .box {
      
            margin-right: 250px;
            border: 2px solid black;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 7px 10px 25px 10px black;
            border: none;
            transition: border-radius .3s;
            margin-left: 100px;
            margin-right: 100px;
            

}

h2 {
    text-align: center;
}

input
{
            height: 40px;
            width: 75%;
            outline: none;
            margin: 10px;
            margin-left: 40px;
            margin-right: 40px;
}
button {
    /*display: block;*/
    width: 76%;
    padding: 10px;
    font-size: 16px;
    border: none;
    margin-left: 40px;
    margin-right: 40px;
    border: none;
    cursor: pointer;
    background-color: rgba(128, 128, 128, 0.84);
}

button:hover {
    background-color: rgba(128, 128, 128, 0.521);
    border: none;
  
}

.error-message {
    color: darkred;
    text-align: center;
}

    </style>
</head>
<body>
    <header>
        <h1>supermarket</h1>
    </header>
    
    <!-- Login Form -->
    <div class="login-container">
        <nav id="login-form">
            <div class="box">
            <h2>Login</h2>
            <form method="POST" action="checklogin.php">
            <input type="text" name="uname" id="username" placeholder="Username" required>
            <input type="password" name="pass" id="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button><br>
            <a href="register.php"><i style="margin-left: 65%;">Create Account</i></a>
            <p id="login-error" class="error-message"></p>
            </form>
        </div>
        </nav>
    </div>

    <script src="script.js">
        // Sample hardcoded credentials
const validUsername = "user";
const validPassword = "password";

const loginForm = document.getElementById('login-form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const loginError = document.getElementById('login-error');

loginForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    const username = usernameInput.value;
    const password = passwordInput.value;

    if (username === validUsername && password === validPassword) {
        // Redirect to another page or perform further actions upon successful login
        alert('Login successful!');
        // For demonstration purpose, redirecting to the homepage
        window.location.href = 'index.html'; 
    } else {
        loginError.textContent = "Invalid username or password. Please try again.";
    }
});

    </script>

</body>
</html>
