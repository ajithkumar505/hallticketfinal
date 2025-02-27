<?php
// Database connection details
$servername = "localhost";
$username = "root";  // your MySQL username
$password = "";      // your MySQL password
$dbname = "ajithkumar"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select one person5
// Assume the table name is 'users' and we're selecting by a person's ID
$feesAmount= 7;
$RegNo= 8;  // The ID of the person you want to select
$sql = "SELECT * FROM newdata1 WHERE  RegNO='21CSA104'";
//$stmt->bind_param("i", $feesAmount);  // "i" means the parameter is an integer

// Execute the query
//$stmt->execute();

// Get the result
//$result = $stmt->get_result();

// Execute the query
$result = $conn->query($sql);

// Check if there's a result
if ($result->num_rows > 0) {
    // Output data of the selected person
    while($row = $result->fetch_assoc()) {
        echo "RegNo: " . $row["RegNo"] . "<br>";
        echo "StudentName: " . $row["StudentName"] . "<br>";
        echo "feesAmount: " . $row["feesAmount"] . "<br>";
        echo "BillNo: " . $row["BillNo"] . "<br>";
        //echo "<tr><td>" . $row["RegNo"] . "</td><td>" . $row["StudentName"] . "</td><td>" . $row["feesAmount"]  .  "</td><td>" . $row["BillNo"]."</td></tr>";
        // add other fields as needed
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
