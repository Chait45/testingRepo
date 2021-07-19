
<!DOCTYPE HTML>
<html>
<body>
<?php
 
include("DBConnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $inUsername = $_POST["username"]; 
 $inEmail = $_POST["email"];
 $inPassword = $_POST["password"];
 $inAddress = $_POST["address"];
 
 $encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 
 $stmt = $db->prepare("INSERT INTO PROFILE( USERNAME, EMAIL, PASSWORD, ADDRESS) VALUES(?, ?, ?)"); //Fetching all the records with input credentials
 $stmt->bind_param("ssss", $inUsername, $inEmail, $encryptPassword, $inAddress); //Where s indicates string type. You can use i-integer, d-double
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 header("location: RegSuccess.html"); // user will be taken to the success page
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
 ?>
 <a href="signup.html">Try Login</a>
 <?php 
 }
}
?>
</body> 
</html>