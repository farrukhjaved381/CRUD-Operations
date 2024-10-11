<!-- updateUC.php -->
<?php
include_once("dbconn.php");
$name_uc=$_POST["UCname"];
$address_uc=$_POST["UCaddress"];
$phone_uc=$_POST["UCphone"];
$name_nazim=$_POST["name_nazim"];
$email_uc=$_POST["UCemail"];
$id=$_POST["id"];


$q="Update unioncouncil set name='$name_uc',address='$address_uc',phone='$phone_uc',name_nazim='$name_nazim',email='$email_uc' where id='$id'";
if($conn->query($q)){
    echo "Union Council's record updated successfully";
}
?>