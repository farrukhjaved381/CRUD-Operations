<!-- addCity.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name_city=$_POST["Cname"];
$tehsils=$_POST["tehsils"];
$phone_city=$_POST["Cphone"];
$district=$_POST["district"];
$email_city=$_POST["Cemail"];

include_once("dbconn.php");
$q="insert into city(name,tehsils,phone,district,email) values('$name_city','$tehsils','$phone_city','$district','$email_city')";
if($conn->query($q)){
    echo "City Record Registered Successfully";
}
}
?>