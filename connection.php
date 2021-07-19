<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="foodplaza";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


/*$sql = "SELECT rollno,name,address,branch FROM details";
$result = $conn->query($sql);


 echo "Rollno  Name  Address Branch <br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   echo "<br>" . $row["rollno"]. "  " . $row["name"]. " " . $row["address"]." " . $row["branch"]."<br>";
    }
} else {
    echo "0 results";
}*/
$conn->close();

?>
