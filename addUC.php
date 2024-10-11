<!-- addUC.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name_uc=$_POST["UCname"];
$address_uc=$_POST["UCaddress"];
$phone_uc=$_POST["UCphone"];
$name_nazim=$_POST["name_nazim"];
$email_uc=$_POST["UCemail"];

include_once("dbconn.php");
$q="insert into unioncouncil(name,address,phone,name_nazim,email) values('$name_uc','$address_uc','$phone_uc','$name_nazim','$email_uc')";
if($conn->query($q)){
    echo "Student Registered Successfully";
}
}
?>