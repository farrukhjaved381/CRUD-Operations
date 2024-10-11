<!-- updateDistrict.php -->
<?php
include_once("dbconn.php");
$name_district=$_POST["Dname"];
$no_of_tehsils=$_POST["no_of_tehsils"];
$phone_district=$_POST["Dphone"];
$ac_name=$_POST["ac_name"];
$email_district=$_POST["Demail"];
$id=$_POST["id"];


$q="Update district set name='$name_district',no_of_tehsils='$no_of_tehsils',phone='$phone_district',ac_name='$ac_name',email='$email_district' where id='$id'";
if($conn->query($q)){
    echo "District's record updated successfully";
}
?>