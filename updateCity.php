<!-- updateCity.php -->
<?php
include_once("dbconn.php");
$name_city=$_POST["Cname"];
$tehsils=$_POST["tehsils"];
$phone_city=$_POST["Cphone"];
$district=$_POST["district"];
$email_city=$_POST["Cemail"];
$id=$_POST["id"];


$q="Update city set name='$name_city',tehsils='$tehsils',phone='$phone_city',district='$district',email='$email_city' where id='$id'";
if($conn->query($q)){
    echo "City's record updated successfully";
}
?>