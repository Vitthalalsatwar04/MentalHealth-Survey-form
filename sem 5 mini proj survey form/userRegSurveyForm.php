<!-- <?php

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
$sql="INSERT INTO usersurveydetail(HearaboutWeb, BrowserUse, DeviceUse, InfoOrganized, HowManyTimesVisit, PrimaryReason, SatisfiedWeb, SuggestionOptional) 
VALUES ('$_POST[hearabtweb]','$_POST[browseruse]','$_POST[deviceuse]','$_POST[infoorganzed]','$_POST[howtimevisit]','$_POST[reasontovisit]','$_POST[findwebsat]','$_POST[whatinfoprovide]')";

if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
echo("<script LANGUAGE='JavaScript'>
window.alert('your information saved successfully, go to next page');
window.location.href='thank_you.html';
</script>");

} else {
echo("<script LANGUAGE='JavaScript'>
window.alert('Error while saving the information');
window.location.href='userRegp2.html';
</script>");
//  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }



mysqli_close($conn);
?> -->