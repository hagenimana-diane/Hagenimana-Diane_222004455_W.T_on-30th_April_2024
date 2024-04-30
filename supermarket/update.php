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
    <title> Order Form</title>
    <link rel="stylesheet" href="styles.css">
 
</head>
<body>
        
 
    <form action="" method="POST">
    <div class="form-group">
            <h1>edit ordering</h1>
            <label for="item">Item:</label>
            <input type="text" id="item" name="item" required>
        
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
            <label for="CustomerID">customerID</label>
            <input type="text" name="CustomerID">
            <button type="submit" name="update">Place Order</button>
        
    </form>
    <div id="orderConfirmation"></div>
<script type="text/javascript">
   document.getElementById("orderForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const item = document.getElementById("item").value;
    const quantity = document.getElementById("quantity").value;
    if (item.trim() === '' || quantity.trim() === '' || quantity <= 0) {
        document.getElementById("orderConfirmation").innerHTML = "<p id='error'>Please fill in all fields with valid values.</p>";
    } else {
        document.getElementById("orderConfirmation").innerHTML = `<p>Order placed for ${quantity} ${item}(s).</p>`;
    }
});

</script>
</body>
</html>
<style type="text/css">
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  
}

form {
    width: 500px;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px; 
    background-color: cadetblue;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color:darkgreen;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: grey;
}

#error {
    color: red;
    font-weight: bold;
}
h1
{
    text-align: center;
    color: #fff;
    text-transform: uppercase;
}
    </style>

<?php
if (isset($_POST['update'])) {
$db= new mysqli('localhost','root','','hagenimana_diane_sms');
$id=$_GET['edit'];
$item=$_POST['item'];
$quantity=$_POST['quantity'];
$CustomerID=$_POST['CustomerID'];
$OrderDate=$_POST['OderDate'];

$up="UPDATE order1 SET item='$item',quantity='$quantity',CustomerID='$CustomerID' WHERE OrderID='$id' ";
$ck=mysqli_query($db,$up);
if ($ck) {
    
   header("location:orderedproduct.php");
  
}
else
{
    echo "byanze";
}
}
?>

