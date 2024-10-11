<!-- addDistrict.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name_district=$_POST["Dname"];
$no_of_tehsils=$_POST["no_of_tehsils"];
$phone_district=$_POST["Dphone"];
$ac_name=$_POST["ac_name"];
$email_district=$_POST["Demail"];

include_once("dbconn.php");
$q="insert into district(name,no_of_tehsils,phone,ac_name,email) values('$name_district','$no_of_tehsils','$phone_district','$ac_name','$email_district')";
if($conn->query($q)){
    echo "District Record Registered Successfully";
}
}
