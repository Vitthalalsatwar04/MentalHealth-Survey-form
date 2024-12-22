<?php
/*echo"First Name Of User Is:".$_POST["fname"]."<br>"."<br>";
echo"Middle Name Of User Is:".$_POST["mname"]."<br>"."<br>";
echo"Last Name Of User Is:".$_POST["lname"]."<br>"."<br>";
echo"Email Of User Is:".$_POST["email"]."<br>"."<br>";
echo"Age Of User Is:".$_POST["age"]."<br>"."<br>";
echo"Address Of User Is:".$_POST["address"]."<br>";*/

// $FirtName=$_POST['fname'];
// $MiddleName=$_POST['mname'];
// $LastName=$_POST['lname'];
// $Email=$_POST['email'];
// $Age=$_POST['age'];
// $Address=$_POST['address'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userreg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
  // echo"connection successfull" ."<br>"."<br>";
}



// $sql = "INSERT INTO userdetails(FirstName, MiddleName, LastName, Email, Gender, Age, DateOfBirth, Phone, Address) 
// VALUES ('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[email]','$_POST[gender]',$_POST[age],'$_POST[dbo]','$_POST[phone]','$_POST[address]')";

$sql="INSERT INTO userdetails(Firstname, MiddleName, LastName, Email, Gender, Age, DateOfBirth,Phone, StretAddress, City, State, Pincode, Country) 
VALUES ('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[email]','$_POST[gender]',$_POST[age],'$_POST[dbo]','$_POST[phone]','$_POST[staddress]','$_POST[ctname]','$_POST[stname]','$_POST[pincode]','$_POST[Cntrname]')";

if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
  echo("<script LANGUAGE='JavaScript'>
  window.alert('your information saved successfully, go to next page');
  window.location.href='mentalheltsurveypage.html';
  </script>");
  
} else {
  echo("<script LANGUAGE='JavaScript'>
  window.alert('Error while saving the information');
  window.location.href='userRegp1.html';
  </script>");
  // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>