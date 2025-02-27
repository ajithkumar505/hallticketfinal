<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees Structure Admin Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h2{

            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .form-container{
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgb(0, 0,0,0.1);
        }
        label{
            font-size:16px;
            font-weight: bold;
            margin-bottom: 5px;
            display: inline-block;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;

        }
        input[type="submit"] {
            padding: 12px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-container input[type="text"]:focus, .form-container input[type="number"]:focus{
            outline:none;
            border-color: #4CAF50;
        }
    </style>
</head>
<h2>BUS - Fees Structure Input</h2>

<!-- Form to input new fee structure -->
    <form action="adminbus.php"method="post">
    <label for="RegNo">RegNO:</label>
    <input type="text" id="RegNO"name="RegNo" required><br><br>
    <label for="StudentName">StudentName:</label>
    <input type="text" id="StudentName"name="StudentName" required><br><br>

    <label for="BUSFeesAmount">BUSFeesAmount:</label>
    <input type="number" id="BUSFeesAmount"name="BUSFeesAmount" required><br><br>

    <label for="BUS BillNo">BUSBillNo:</label>
    <input type="number" id="BUSBillNo"name="BUSBillNo"required><br><br>
    <label for="BUS Stage">BUSStage:</label>
    <input type="text" id="BUSStage"name="BUSStage" required><br><br>

    <input type="submit" value="Add Fee">
    </form>
    <?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajithkumar";

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Retrieve form data
$RegNo = $_POST['RegNo'];
$StudentName = $_POST['StudentName'];
$BUSFeesAmount = $_POST['BUSFeesAmount'];
$BUSBillNo = $_POST['BUSBillNo'];
$BUSStage = $_POST['BUSStage'];

// Insert data into the database
$sql = "INSERT INTO bus1 (RegNo,StudentName,BUSFeesAmount,BUSBillNo,BUSStage) VALUES ('$RegNo','$StudentName','$BUSFeesAmount','$BUSBillNo','$BUSStage')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
</body>
</html>