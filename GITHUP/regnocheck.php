<?php
// Database connection details
$servername = "localhost";
$username = "root";  // your MySQL username
$password = "";      // your MySQL password
$dbname = "ajithkumar"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"]=="POST"){

$input_RegNo = $_POST['RegNo'];

$sql = "SELECT RegNo,StudentName,FeesAmount,BillNo FROM newdata1 WHERE RegNo=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s" ,$input_RegNo);

$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) //{
    //$user = $result->fetch_assoc();
//}else {
    ///echo "Username not found!";

//}

$feesAmount= 7;
$RegNo= 8;  // The ID of the person you want to select
//$sql = "SELECT * FROM newdata1 WHERE  RegNO=?";

//$result = $conn->query($sql);

// Check if there's a result
if ($result->num_rows > 0) {
    echo"SEM Fees Details";
    echo"<table border='2'>
    <tr>
        <td>RegNo</th>
        <td>StudentName</th>
        <td>FeesAmount</th>
       
        <td>BillNo</th>
    </tr>";

    // Output data of the selected person
    while($row = $result->fetch_assoc()) {
      echo"<tr>
        <td>" . $row["RegNo"] . "</td>;
       <td>" . $row["StudentName"] . "</td>;
          <td>" . $row["FeesAmount"] . "</td>;
         <td>" . $row["BillNo"] . "</td>;
         </tr>";
        //echo "<tr><td>" . $row["RegNo"] . "</td><td>" . $row["StudentName"] . "</td><td>" . $row["feesAmount"]  .  "</td><td>" . $row["BillNo"]."</td></tr>";
        // add other fields as needed
    }
} else {
    echo "correct regno enter";
}
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"]=="POST"){

$input_RegNo = $_POST['RegNo'];

$sql = "SELECT RegNo,StudentName,BUSFeesAmount,BUSBillNo,BUSStage FROM bus1 WHERE RegNo=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s" ,$input_RegNo);

$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) //{
    //$user = $result->fetch_assoc();
//}else {
    ///echo "Username not found!";

//}

$feesAmount= 7;
$RegNo= 8;  // The ID of the person you want to select
//$sql = "SELECT * FROM newdata1 WHERE  RegNO=?";

//$result = $conn->query($sql);

// Check if there's a result
if ($result->num_rows > 0) {
    
    echo"<table border='1'>
    <tr>
        <td>RegNo</th>
        <td>StudentName</th>
        <td>BUSFeesAmount</th>
        
        <td>BUSBillNo</th>
        <td>BUSStage</th>
    </tr>";


    // Output data of the selected person
    while($row = $result->fetch_assoc()) {
        echo"BUS Fees Details";
        echo"<tr>
        <td>" . $row["RegNo"] . "</td>;
       <td>" . $row["StudentName"] . "</td>;
          <td>" . $row["BUSFeesAmount"] . "</td>;
         
         <td>" . $row["BUSBillNo"] . "</td>;
         <td>" . $row["BUSStage"] . "</td>;
         </tr>";
         //header("location:regno.php");
        //echo "<tr><td>" . $row["RegNo"] . "</td><td>" . $row["StudentName"] . "</td><td>" . $row["feesAmount"]  .  "</td><td>" . $row["BillNo"]."</td></tr>";
        // add other fields as needed
    }
    echo"</table>";
    echo "SHOW FEES DEATIALS! <a href='http://localhost:3000/hallticket.php'>DOWNLOAD HALL TICKET</a>";
    //header("location:homeweb.php");
    //exit();
} else {
    echo "correct regno enter";
}
}
// Close the connection
$conn->close();
?>



