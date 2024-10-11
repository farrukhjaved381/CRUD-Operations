<!-- deleteCity.php -->
<?php
include_once("dbconn.php");
$record_id=$_GET["id"];
$q="Delete from city where id='$record_id'";
if($conn->query($q)){
    echo "City record deleted successfully";
}
?>